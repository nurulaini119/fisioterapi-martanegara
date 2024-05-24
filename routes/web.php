<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('homepage');
});

Route::get('/patient', function () {
    return view('patient.patient');
});

Route::get('/patient/add', function () {
    return view('patient.add');
});
