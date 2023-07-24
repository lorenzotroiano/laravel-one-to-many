@extends('layouts.app')
@section('content')
    <ul class="text-center list-unstyled">
        @foreach ($projects as $project)
            <li>
                <a class="text-black" href="{{ route('project.show', $project->id) }}">{{ $project->title }}</a>
            </li>
        @endforeach
    </ul>
@endsection
