@extends('layouts.app')
@section('content')
    <div class="container p-5">
        <h1>
            &#128193; {{ $projects->title }}
        </h1>
        <h6> {{ $projects->publish_date }}</h6>
        <p>
            {{ $projects->description }}
        </p>



        <a class="bg-warning">
            {{ $projects->type->type_name }}
        </a>


    </div>
@endsection
