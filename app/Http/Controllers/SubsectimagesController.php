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
        dd('hello');
        $photo = Subsectimages::create(request()->validate([
            'image' => ['required', 'image', 'max:2500', 'dimensions:max_width=1000'],
            'subsections_id' => ['required', 'integer']
        ]));
        dd($photo);
     
        $photo->update(['image' => request('image')->store('uploads', 'public')]);
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
}