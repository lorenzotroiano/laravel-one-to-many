@extends('layouts.app')
@section('content')
    <ul class="text-center list-unstyled">
        @foreach ($projects as $project)
            <li class="p-2">
                <a class="text-black" href="{{ route('project.show', $project->id) }}">{{ $project->title }} </a>

            </li>
        @endforeach


    </ul>
@endsection
