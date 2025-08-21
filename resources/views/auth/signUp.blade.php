@extends('auth.auth')

@section('title', 'Sign Up')

@section('content')

    <div class="d-flex flex-column flex-sm-row-reverse">
        <div class="logo-sign-in">
            <img class="image-logo" src="{{ asset('images/sticky-note.png') }}" alt="logo">
        </div>
        <div class="content-container">
            <div> <!-- title -->
                <h1 class="title">Sign Up</h1>
            </div>
            <div> <!-- description -->
                <h2 class="fs-4 fw-normal">Create your account to start organizing and tracking your tasks with ease.</h2>
            </div>

            <div class="d-flex flex-column gap-5 mt-5"> <!-- Input fields container -->

                <div> <!-- email container -->
                    <h2 class="fs-4 fw-semibold">Email</h2>
                    <input class="input-field" type="email">
                </div>

                <div> <!-- password container -->
                    <h2 class="fs-4 fw-semibold">Password</h2>
                    <input class="input-field" type="password">
                </div>

                 <div> <!-- confirm password container -->
                    <h2 class="fs-4 fw-semibold">Confirm Password</h2>
                    <input class="input-field" type="password">
                </div>
            </div>
            <div class="d-flex flex-row gap-3 mt-3"> <!-- Terms and Conditions -->
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <h3 class="link">Agree Terms and Conditions</h3>
            </div>

            <div class="d-flex flex-column gap-4 mt-5">
                <button type="button" class="btn bg-btn-primary w-100"
                    onclick="window.location='{{ route('toDo') }}'">SIGN UP</button>
                <h3 class="text-center fw-semibold">Or</h3>
                <div class="d-flex flex-column gap-3"> <!-- credential buttons -->
                    <button type="button" class="btn secondary-btn" onclick="window.location='{{ route('signIn') }}'">
                        <i class="fa-brands fa-google"></i> Sign In
                    </button>

                    <button type="button" class="btn secondary-btn" onclick="window.location='{{ route('signIn') }}'">
                        <i class="fa-brands fa-github"></i> Github
                    </button>
                </div>
            </div>
            <div class="mt-3">
                <span>Already have an account?</span>
                <a href="{{route('signIn')}}">Sign In</a>
            </div>
        </div>
    </div>
@endsection
