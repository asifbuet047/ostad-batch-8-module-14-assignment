@extends('layout.layout')

@section('page_title', 'Projects')

@section('custom_color', 'background: linear-gradient(135deg, #172A3A, #004346);')

@section('blog_color', 'text-white')

@section('content')
    <div class="container my-5">
        <div class="p-5 rounded-4 shadow text-white" style="background: linear-gradient(135deg, #172A3A, #004346);">
            @foreach ($blogs as $blog)
                <div class="border border-4 border-primary rounded mb-2">
                    <div class="d-flex justify-content-center align-items-center" style="height: 10vh;">
                        <h1 class="p-2 rounded-circle" style="font-weight: bold;background: #172A3A">
                            {{ $loop->iteration }}
                        </h1>
                    </div>
                    <h2 class="fw-bold p-2">{{ $blog->name }}</h2>
                    <p class="p-1">{{ $blog->content }}</p>
                </div>
            @endforeach

            <a href="#" class="btn btn-light fw-semibold">Learn More</a>
        </div>
    </div>
@endsection
