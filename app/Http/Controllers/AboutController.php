<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{
    function about(){
        $about = About::all();

        return view('about_me', ['abouts' => $about]);
    }

    function editAbout($id){
        $about = About::findOrFail($id);

        return view('editAbout', ['about' => $about]);
    }

    function updateAbout(Request $request, $id){
        $request->validate([
            'bio' => 'required|unique:about,bio,'.$id
        ]);

        if($request->file('photo_file')){
            $file = $request->file('photo_file');
            $fileName = $file->hashName();

            Storage::putFileAs('photos', $file, $fileName);

            $request['photo'] = $fileName;
        }
        
        $about = About::findOrFail($id);
        $about->update($request->all());

        Session::flash('message', 'Data berhasil diedit');

        return redirect()->route('about');
    }

    function deleteAbout($id){
        About::findOrFail($id)->delete();

        Session::flash('message', 'Data berhasil dihapus');

        return redirect()->route('about');
    }

    function createAbout(){
        return view('createAbout');
    }

    function storeAbout(Request $request){
        $request->validate([
            'bio' => 'required'
        ]);

        if($request->file('photo_file')){
            $file = $request->file('photo_file');
            $fileName = $file->hashName();

            Storage::putFileAs('photos', $file, $fileName);

            $request['photo'] = $fileName;
        }

        About::create($request->all());

        Session::flash('message', 'Data berhasil ditambahkan');

        return redirect()->route('about');
    }
}
