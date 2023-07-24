<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;



class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        return view('welcome', compact('projects'));
    }

    public function show($id)
    {

        $projects = Project::findOrFail($id);

        return view('show', compact('projects'));
    }
}
