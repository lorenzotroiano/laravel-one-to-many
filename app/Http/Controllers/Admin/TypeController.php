<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Project;
use App\Models\Type;

class TypeController extends Controller
{
    // public function show($id)
    // {

    //     $type = Type::findOrFail($id);

    //     return view('welcome', compact('type'));
    // }

    // public function create()
    // {

    //     $projects = Project::all();

    //     return view('project-create', compact('projects'));
    // }
    // public function store(Request $request)
    // {

    //     $data = $request->all();

    //     $type = Type::create($data);

    //     return redirect()->route('type.show', $type->id);
    // }
}
