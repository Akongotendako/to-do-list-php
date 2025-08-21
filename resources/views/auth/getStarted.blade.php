@extends('auth.auth')

@section('title', 'Get Started')

@section('content')
    <div class="d-flex flex-column flex-sm-row-reverse">
        <div class="logo">
            <img class="image-logo" src="{{ asset('images/sticky-note.png') }}" alt="logo" >
        </div>
        <div class="content-container">
            <div class="d-flex flex-column">
                <div class="d-none d-sm-block">
                    <h1 class="title">DOFirst</h1>
                </div>
                <div class="mt-4 mt-sm-2">
                    <h2 class="fs-4 fw-normal">Welcome! Your journey to a more organized and productive day starts here.
                        Let’s make every task count and turn your goals into achievements.</h2>
                </div>
                <div class="mt-5">
                    <button type="button" class="btn bg-btn-primary w-100"
                        onclick="window.location='{{ route('signIn') }}'">GET STARED</button>
                </div>
            </div>
        </div>
    </div>
@endsection
