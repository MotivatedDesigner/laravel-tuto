<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
      $projects = Project::all();
      return view('projects.index',['projects'=>$projects]);
    }

    public function edit(Project $project)
    {
      return view('projects.edit',['project'=>$project]);
    }

    public function update(Project $project)
    {
      request()->validate([
        'title'=>'required',
        'description'=>'required'
      ]);

      $project->update([
        'title'=> request('title'),
        'description'=> request('description'),
      ]);
      return redirect('/projects'); 
    }
}
