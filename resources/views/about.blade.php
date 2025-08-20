@extends('layout.layout')

@section('page_title', 'About')

@section('content')
    <div class="container my-5">
        <div class="p-5 rounded-4 shadow text-black" style="background: linear-gradient(135deg, #CCD7C5, #EFD2CB);">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 col-md-6 text-center mb-4 mb-md-0">
                        <img src="{{ asset('new_me.jpg') }}" alt="Our Team" class="img-fluid rounded shadow"
                            style="max-width: 300px;">
                    </div>
                    <div class="col-12 col-md-6 text-center text-md-start">
                        <h2 class="display-5 fw-bold mb-3">About Me</h2>
                        <p class="lead mb-4">
                            I am a dedicated web developer working independently to create modern, responsive, and
                            user-friendly applications.
                            From planning to deployment, I handle every part of the project myself to ensure the best
                            quality.
                        </p>
                        <p>
                            With years of experience and a commitment to excellence, I ensure that every solution is
                            tailored to meet the unique needs of my customers. Your success is my priority.
                        </p>
                        <a href="#contact" class="btn btn-primary btn-lg mt-3">Get in Touch</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

@section('custom_color', 'background: linear-gradient(135deg, #CCD7C5, #EFD2CB);')
