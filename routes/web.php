<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\SubsectionController;
use App\Http\Controllers\SubsectimagesController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/admin', function () {
    return view('admin');
})->middleware(['auth'])->name('admin');

require __DIR__.'/auth.php';

Route::get('index', [PageController::class, 'index'])->name('index');
Route::get('/', [PageController::class, 'index'])->name('/');

Route::get('about', [PageController::class, 'about'])->name('about');

Route::get('news/{news}', [NewsController::class, 'show'])->name('news.show');
Route::get('news', [NewsController::class, 'index'])->name('news');

Route::get('sections/{sections}', [SectionController::class, 'show'])->name('sections.show');
Route::get('sections', [SectionController::class, 'sections'])->name('sections');

Route::get('subsections/{subsections}', [SectionController::class, 'subsectionsShow'])->name('subsections.show');
Route::get('subsections', [SectionController::class, 'subsections'])->name('subsections');

Route::view('/admin', 'admin')->name('admin')->middleware('auth');
Route::redirect('/dashboard', '/admin');

Route::get('/admin/news', [AdminController::class, 'news'])->name('admin.news')->middleware('auth');
Route::get('/admin/news.create', [NewsController::class, 'create'])->name('admin.news.create')->middleware('auth');
Route::get('/admin/news/{new}/edit', [NewsController::class, 'edit'])->name('admin.news.edit')->middleware('auth');
Route::patch('/admin/news/{new}/update', [NewsController::class, 'update'])->name('admin.news.update')->middleware('auth');
Route::get('/admin/news/store', [NewsController::class, 'store'])->name('admin.news.store')->middleware('auth');
Route::delete('/admin/news/{new}/destroy', [NewsController::class, 'destroy'])->name('admin.news.destroy')->middleware('auth');


Route::get('/admin/sections', [AdminController::class, 'sections'])->name('admin.sections')->middleware('auth');
Route::get('/admin/sections.create', [SectionController::class, 'create'])->name('admin.sections.create')->middleware('auth');
Route::get('/admin/sections/{section}/edit', [SectionController::class, 'edit'])->name('admin.sections.edit')->middleware('auth');
Route::patch('/admin/sections/{section}/update', [SectionController::class, 'update'])->name('admin.sections.update')->middleware('auth');
Route::post('/admin/sections/store', [SectionController::class, 'store'])->name('admin.sections.store')->middleware('auth');
Route::delete('/admin/sections/{section}/destroy', [SectionController::class, 'destroy'])->name('admin.sections.destroy')->middleware('auth');



Route::get('/admin/subsections', [AdminController::class, 'subsections'])->name('admin.subsections')->middleware('auth');
Route::get('/admin/subsections.create', [SubsectionController::class, 'create'])->name('admin.subsections.create')->middleware('auth');
Route::get('/admin/subsections/{subsection}/edit', [SubsectionController::class, 'edit'])->name('admin.subsections.edit')->middleware('auth');
Route::patch('/admin/subsections/{subsection}/update', [SubsectionController::class, 'update'])->name('admin.subsections.update')->middleware('auth');
Route::post('/admin/subsections/store', [SubsectionController::class, 'store'])->name('admin.subsections.store')->middleware('auth');
Route::delete('/admin/subsections/{subsection}/destroy', [SubsectionController::class, 'destroy'])->name('admin.subsections.destroy')->middleware('auth');


Route::get('/admin/subsectimages', [AdminController::class, 'subsectimages'])->name('admin.subsectimages')->middleware('auth');
Route::get('/admin/subsectimages.create', [SubsectimagesController::class, 'create'])->name('admin.subsectimages.create')->middleware('auth');
Route::get('/admin/subsectimages/{subsectimages}/edit', [SubsectimagesController::class, 'edit'])->name('admin.subsectimages.edit')->middleware('auth');
Route::patch('/admin/subsectimages/{photo}/update', [SubsectimagesController::class, 'update'])->name('admin.subsectimages.update')->middleware('auth');
Route::post('/admin/subsectimages/store', [SubsectimagesController::class, 'store'])->name('admin.subsectimages.store')->middleware('auth');
Route::delete('/admin/subsectimages/{photo}/destroy', [SubsectimagesController::class, 'destroy'])->name('admin.subsectimages.destroy')->middleware('auth');



Route::get('/admin/about', [AdminController::class, 'about'])->name('admin.about')->middleware('auth');
Route::patch('/admin/about/update/{about}', [AdminController::class, 'aboutupdate'])->name('admin.about.update')->middleware('auth');


use App\Http\Controllers\MultiFileUploadController;
 
//Route::get('files-upload', [MultiFileUploadController::class, 'index']);
//Route::post('save-multiple-files', [MultiFileUploadController::class, 'store']);
