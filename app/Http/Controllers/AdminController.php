<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Sections;
use App\Models\Abouts;
use App\Models\Subsections;
class AdminController extends Controller
{

    public function news() {
        return view('admin.news', ['news' => News::orderBy('date', 'desc')->paginate(15)]);
    }    

    public function sections() {
        return view('admin.sections', ['sections' => Sections::orderBy('order', 'asc')->get()]);
    }    
        
    public function subsections() {
        return view('admin.subsections', ['subsections' => Subsections::orderBy('sections_id', 'asc')->orderBy('order', 'asc')->paginate(15)]);
    }  
    
    public function about() {
        return view('admin.about', ['about' => Abouts::first()]);
    }  

    public function aboutupdate(Abouts $about) {
       
        $about->update(request()->validate([
            'intro' => 'nullable|string',
            'body' => 'nullable|string'
            
        ]));
     
        return back();
    }  
}
