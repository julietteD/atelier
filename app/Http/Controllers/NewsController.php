<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Models\News;

class NewsController extends Controller
{
    public function index(){
        $news = News::all();
        return view('news',['news' => $news]);
    }
    
    public function show($id){
        $new = News::find($id);
        return view('new',['new' => $new]);
    }


    public function create() {
       return view('admin.news.create', ['new' => new News]);
    }
   
    public function edit(News $new) {
       return view('admin.news.edit', ['new' => $new]);
    }

    public function store() {
        $new = News::create($this->data());
        $this->image($new);
        return redirect()->route('admin.news');
    }

    public function update(News $new) {
        $new->update($this->data());
        $this->image($new);
        return redirect()->route('admin.news');
    }

    public function destroy(News $new) {
       // if ($new->image) { Storage::disk('public')->delete($new->image); }
        $new->delete();
        return back();
    }

    private function data() {
        return request()->validate([
            'date' => 'filled|date',
            'title' => 'filled|string|max:255',
            'body' => 'nullable|string',
            'intro' => 'nullable|string',
            'image' => ['nullable','image', 'max:1000'],

        ]);
    }

    private function image($new) {
        if (request()->hasFile('image')) {
            if ($new->image) { Storage::disk('public')->delete($new->image); }
            $new->update(['image' => request()->file('image')->store('uploads', 'public')]);
            /*Image::make(public_path('storage/' . $new->image))->resize(400, null, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            })->save();*/
        }
    }

}
