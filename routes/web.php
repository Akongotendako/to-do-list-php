<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.getStarted');
})->name('getStarted');

Route::get('/signIn', function() {
    return view('auth.signIn');
})->name('signIn');

Route::get('/signUp', function() {
    return view('auth.signUp');
})->name('signUp');

Route::get('/toDo', function() {
    return view('dashboard.toDo');
})->name('toDo');

Route::get('/forgotPassword', function() {
    return view('auth.forgotPassword');
})->name('forgotPassword');