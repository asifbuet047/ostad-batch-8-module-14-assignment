@extends('layout.layout')

@section('page_title', 'About')

@section('content')
    <div class="container my-5">
        <div class="p-5 rounded-4 shadow text-black" style="background: linear-gradient(135deg, #CCD7C5, #EFD2CB);">
            <h2 class="fw-bold">About</h2>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 col-md-6 mb-4 mb-md-0 text-center">
                        <i class="bi bi-people-fill" style="font-size: 8rem; color: #0d6efd;"></i>
                    </div>
                    <div class="col-12 col-md-6 text-center text-md-start">
                        <h2 class="display-5 fw-bold mb-3">About Us</h2>
                        <p class="lead mb-4">
                            We are a team of passionate professionals dedicated to delivering the best services to our
                            clients. Our mission is to innovate, inspire, and make a positive impact in every project we
                            undertake.
                        </p>
                        <p>
                            With years of experience and a commitment to excellence, we ensure that every solution is
                            tailored to meet the unique needs of our customers. Your success is our priority.
                        </p>
                        <a href="#contact" class="btn btn-primary btn-lg mt-3">Get in Touch</a>
                    </div>

                </div>
            </div>
            <a href="#" class="btn btn-light fw-semibold">Learn More</a>
        </div>
    </div>
@endsection

@section('custom_color', 'background: linear-gradient(135deg, #CCD7C5, #EFD2CB);')
