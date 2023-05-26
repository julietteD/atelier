<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Sections;
use App\Models\Subsections;
use App\Models\Abouts;

class PageController extends Controller
{

    public function index(){
        $news = News::orderBy('date','desc')->limit(2)->get();
        $sections = Sections::all();
        $about = Abouts::first();
        return view('index', ['news' => $news,'sections' => $sections, 'about' => $about]);
    }
   

    public function about(){
  
        $about = Abouts::first();
        return view('about', [ 'about' => $about]);
    }
   

}
