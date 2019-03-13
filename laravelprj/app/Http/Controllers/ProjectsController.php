<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Project;

class ProjectsController extends Controller
{
    public function index() {
     $projects = Project::all();
     // will return a JSON object of all projects
     // return $projects;
      return view('projects.index' , ['projects' => $projects]);
      //return view('projects.index' , compact('projects'));
    }
}
