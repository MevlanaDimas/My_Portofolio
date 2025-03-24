<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Project;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index(){
        $about = About::whereRaw('id = (SELECT MAX(id) from about)')->get();
        $projects = Project::all();
        // foreach($about as $item){
        //     print_r($item->bio);
        // };
        // print_r($about->photo);
        // die;

        return view('index', [
            'about' => $about,
            'projects' => $projects
        ]);
    }
}
