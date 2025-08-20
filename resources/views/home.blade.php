@extends('layout.layout')

@section('page_title', 'Home page')

@section('custom_color', 'background: linear-gradient(135deg, #473144, #473144);')

@section('content')
    <div class="container my-5">
        <div class="p-5 rounded-4 shadow text-white" style="background: linear-gradient(135deg, #473144, #473144);">
            <h1 class="display-4 fw-bold mb-3">Hi, I'm {{ $name }}</h1>
            <p class="lead mb-4">
                A passionate Software Developer dedicated to building efficient, scalable, and user-friendly solutions.
                I love turning ideas into reality through clean code and modern technologies.
            </p>
            <a href="/projects" class="btn btn-light btn-lg">View My Work</a>
        </div>
    </div>

@endsection

@section('blog_color', 'text-white')
