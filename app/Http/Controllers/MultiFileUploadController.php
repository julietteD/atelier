<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
//use App\Models\File;
 
 
class MultiFileUploadController extends Controller
{
    public function index()
    {
        return view('multiple-files-upload');
    }
 
    public function store(Request $request)
    {
       
        $validatedData = $request->validate([
        'files' => 'required'
        ]);
 
     
        if($request->hasfile('files'))
         {
            foreach($request->file('files') as $key => $file)
            {
                $name = $file->getClientOriginalName();
                 $ext = $file->getClientOriginalExtension();
              
               /* $insert[$key]['name'] = $name;
                $insert[$key]['path'] = $path;*/

           
                
                $file->storeAs('public/uploads',$name );

   
 
            }
         }
 
       // File::insert($insert);
 
        return redirect('files-upload')->with('status', 'Multiple File has been uploaded Successfully');
 
    }
}