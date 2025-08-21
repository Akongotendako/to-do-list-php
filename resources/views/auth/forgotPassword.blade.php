@extends('auth.auth')

@section('title', 'Forgot Password')

@section('content')
    <div class="d-flex flex-column flex-sm-row-reverse h-100">
        <div class="logo-forgot-password">
            <img class="image-logo" src="{{ asset('images/sticky-note.png') }}" alt="logo">
        </div>
        <div class="content-container w-50">
            <div> <!-- title -->
                <h1 class="d-none d-sm-block">Forgot Password</h1>
            </div>
            <div> <!-- description -->
                <h2 class="fs-4 fw-normal">Please enter your email address to receive verification code.</h2>
            </div>

            <div class="d-flex flex-column gap-5 mt-5"> <!-- Input fields container -->

                <div> <!-- email container -->
                    <h2 class="fs-4 fw-semibold">Email</h2>
                    <input class="input-field" type="email">
                </div>
            </div>


            <div class="mt-4">
                <button type="button" class="btn bg-btn-primary w-100">SEND
                    CODE</button>
            </div>
        </div>
    @endsection
