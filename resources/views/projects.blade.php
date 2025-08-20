@extends('layout.layout')

@section('page_title', 'Projects')

@section('custom_color', 'background: linear-gradient(135deg, #726DA8, #7D8CC4);')

@section('content')
    <div class="container my-5">
        <div class="p-5 rounded-4 shadow text-black" style="background: linear-gradient(135deg, #726DA8, #7D8CC4);">
            @foreach ($projects as $project)
                <div class="border border-4 border-primary rounded mb-2 container">
                    <div class="d-flex justify-content-center align-items-center" style="height: 10vh;">
                        <h1 class="p-2 rounded-circle" style="font-weight: bold;background: #726DA8">
                            {{ $loop->iteration }}
                        </h1>
                    </div>
                    <h2 class="fw-bold p-2 row">{{ $project->title }}</h2>
                    <p class="p-1 row">{{ $project->description }}</p>
                </div>
            @endforeach
            <a href="#" class="btn btn-light fw-semibold">Learn More</a>
        </div>
    </div>
@endsection
