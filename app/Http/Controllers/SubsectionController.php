<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sections;
use App\Models\Subsections;
use App\Models\Subsectimages;
use Illuminate\Support\Facades\Storage;
class SubsectionController extends Controller
{
   

    public function create() {
        $sections = Sections::all();
        return view('admin.subsections.create', ['subsection' => new Subsections, 'sections' =>  $sections]);
     }
    
     public function edit(Subsections $subsection) {
        $sections = Sections::all();
        $subsectimages = Subsectimages::all();
        return view('admin.subsections.edit', ['subsection' => $subsection, 'sections' =>  $sections, 'subsectimages' =>  $subsectimages]);
     }
 
     public function store() {
         $subsection = Subsections::create($this->data());
         $this->image($subsection);
      
         return redirect()->route('admin.subsections');
     }
 
     public function update(Subsections $subsection) {
         $subsection->update($this->data());
         $this->image($subsection);
      
         return redirect()->route('admin.subsections');
     }
 
     public function destroy(Subsections $subsection) {
        // if ($section->image) { Storage::disk('public')->delete($section->image); }
         $subsection->delete();
         return back();
     }
 
     private function data() {
         return request()->validate([
             'title' => 'filled|string|max:255',
             'body' => 'filled',
             'sections_id' => 'filled',
             'order' => ['nullable','integer'],
             'image' => ['nullable','image', 'max:1000'],
         ]);
     }
 
     private function image($subsection) {
       

         if (request()->hasFile('image')) {
            if ($subsection->image) { Storage::disk('public')->delete($subsection->image); }
            $subsection->update(['image' => request('image')->store('uploads', 'public')]);
        }

     }
 
}
