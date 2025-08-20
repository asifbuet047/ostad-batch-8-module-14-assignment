@extends('layout.layout')

@section('page_title', 'Projects')

@section('custom_color', 'background: linear-gradient(135deg, #B56576, #E56B6F);')


@section('content')
    <div class="container my-5">
        <div class="row p-5 rounded-4 shadow text-black" style="background: linear-gradient(135deg, #B56576, #E56B6F);">
            <h2 class="fw-bold">Contact</h2>
            <form class="container">
                <div class="row mb-3">
                    <label for="name" class="form-label">Your Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter your name">
                </div>
                <div class="row mb-3">
                    <label for="email" class="form-label">Your Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter your email">
                </div>
                <div class="row mb-3">
                    <label for="message" class="form-label">Your Message</label>
                    <textarea class="form-control" id="message" rows="4" placeholder="Write your message"></textarea>
                </div>
                <div class="row">
                    <div class="col-4"></div>
                    <div class="col-4"><button type="submit" class="btn btn-custom w-100">Send Message</button></div>
                    <div class="col-4"></div>

                </div>

            </form>
        </div>
    </div>
@endsection
