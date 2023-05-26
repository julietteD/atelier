<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sections;
use App\Models\Subsections;
use App\Models\Subsectimages;
use Illuminate\Support\Facades\Storage;
//use Intervention\Image\Facades\Image;

class SectionController extends Controller
{
    public function index(){
        $sections = Sections::orderBy('order','asc')->get();
        return view('sections',['sections' => $sections]);
    }
    
    public function show($id){
        $section = Sections::find($id);
        return view('section',['section' => $section]);
    }

    public function subsections(){
        $subsections = Subsections::all();
        return view('subsections',['subsections' => $subsections]);
    }

    public function subsectionsShow($id){
        $subsection = Subsections::find($id);
        $section = $subsection->Sections;
        $subsectimages = Subsectimages::all();
        return view('subsection',['subsection' => $subsection, 'section' => $section, 'subsectimages' =>  $subsectimages]);
    }


    public function create() {
        return view('admin.sections.create', ['section' => new Sections]);
     }
    
     public function edit(Sections $section) {
        return view('admin.sections.edit', ['section' => $section]);
     }
 
     public function store() {
         $section = Sections::create($this->data());
         $this->image($section);
         return redirect()->route('admin.sections');
     }
 
     public function update(Sections $section) {
         $section->update($this->data());
         $this->image($section);
         return redirect()->route('admin.sections');
     }
 
     public function destroy(Sections $section) {
        // if ($section->image) { Storage::disk('public')->delete($section->image); }
         $section->delete();
         return back();
     }
 
     private function data() {
         return request()->validate([
            'order' => ['nullable','integer'],
             'title' => 'filled|string|max:255',
         
         ]);
     }
 
     private function image($section) {
         if (request()->hasFile('image')) {
             if ($section->image) { Storage::disk('public')->delete($section->image); }
             $section->update(['image' => request()->file('image')->store('uploads', 'public')]);
            
         }
     }
 
}
