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

        <ul>
            @foreach ($projects->type as $type)
                <li>
                    <a>
                        {{ $type->type_name }}
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
