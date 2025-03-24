<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class ProjectsController extends Controller
{
    function projects(){
        $projects = Project::all();

        return view('projects', ['projects' => $projects]);
    }

    function editProject($id){
        $project = Project::findOrFail($id);

        return view('editProject', ['project' => $project]);
    }

    function updateProject(Request $request, $id){
        $request->validate([
            'title' => 'required|unique:projects,title,'.$id,
            'proj_desc' => 'required|unique:projects,proj_desc'.$id
        ]);

        if($request->file('img_file')){
            $file = $request->file('img_file');
            $fileName = $file->hashName();

            Storage::putFileAs('images', $file, $fileName);

            $request['img'] = $fileName;
        }
        
        $project = Project::findOrFail($id);
        $project->update($request->all());

        Session::flash('message', 'Data berhasil diedit');

        return redirect()->route('proejcts');
    }

    function deleteProject($id){
        Project::findOrFail($id)->delete();

        Session::flash('message', 'Data berhasil dihapus');

        return redirect()->route('projects');
    }

    function createProject(){
        return view('createProject');
    }

    function storeProject(Request $request){
        $request->validate([
            'title' => 'required',
            'proj_desc' => 'required',
        ]);

        if($request->file('img_file')){
            $file = $request->file('img_file');
            $fileName = $file->hashName();

            Storage::putFileAs('images', $file, $fileName);

            $request['img'] = $fileName;
        }

        Project::create($request->all());

        Session::flash('message', 'Data berhasil ditambahkan');

        return redirect()->route('projects');
    }
}
