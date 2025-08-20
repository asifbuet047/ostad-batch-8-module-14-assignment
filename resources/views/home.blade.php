@extends('layout.layout')

@section('page_title', 'Home page')

@section('custom_color', 'background: linear-gradient(135deg, #473144, #473144);')

@section('content')
    <div class="container my-5">
        <div class="p-5 rounded-4 shadow text-white" style="background: linear-gradient(135deg, #473144, #473144);">
            <h1 class="display-4 fw-bold mb-3">Welcome to Our Website!</h1>
            <p class="lead mb-4">
                We are thrilled to have you here. Explore our services and learn how we can help you achieve your
                goals.
            </p>
            <a href="#about" class="btn btn-light btn-lg">Learn More About Us</a>
        </div>
    </div>
@endsection

@section('blog_color', 'text-white')
