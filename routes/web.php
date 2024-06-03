<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


//landing page for the website "/"
Route::get('/', function () {
    return view('landing');
});

Route::get('/job-seekers', \App\Livewire\JobSeekersComponent::class);
