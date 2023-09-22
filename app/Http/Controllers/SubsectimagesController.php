<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sections;
use App\Models\Subsections;
use App\Models\Subsectimages;
use Illuminate\Support\Facades\Storage;


class SubsectimagesController extends Controller
{
   
    public function store()
    {  
        $photo = Subsectimages::create(request()->validate([
            'subsections_id' => ['required', 'integer']
        ]));
        
        dd($photo);
        $photo->update(['image' => request('image')->store('uploads', 'public')]);
        $this->image($section);

        return back();
    }

    public function update(Subsectimages $photo)
    {

        $photo->update(['order' => request('order')]);
        return back();
    }

    public function destroy(Subsectimages $photo)
    {
        Storage::disk('public')->delete($photo->image);
        $photo->delete();
        return back();
    }

    private function image($section) {
        if (request()->hasFile('image')) {
            if ($section->image) { Storage::disk('public')->delete($section->image); }
            $section->update(['image' => request()->file('image')->store('uploads', 'public')]);
           
        }
    }
}