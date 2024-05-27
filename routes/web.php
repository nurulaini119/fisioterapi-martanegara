<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('homepage');
});

// patient
Route::get('/patient', function () {
    return view('patient.patient');
});

Route::get('/patient/add', function () {
    return view('patient.add');
});

Route::get('/patient/edit', function () {
    return view('patient.edit');
});

// visit
Route::get('/visit', function () {
    return view('visit.visit');
});

Route::get('/visit/add', function () {
    return view('visit.add');
});

Route::get('/visit/edit', function () {
    return view('visit.edit');
});

// employee
Route::get('/employee', function () {
    return view('employee.employee');
});

Route::get('/employee/add', function () {
    return view('employee.add');
});

Route::get('/employee/edit', function () {
    return view('employee.edit');
});
