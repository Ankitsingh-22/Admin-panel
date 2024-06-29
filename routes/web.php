<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/w', function () {
    return view('w');
});
Route::get('/home', function () {
    return view('home');
});
// Route::get('/form', function () {
//     return view('form');
// });

Route::get('/form', [FormController::class, 'showForm']);
Route::post('/submit', [FormController::class, 'submitForm']);

Route::get('/complaints', function () {
    return view('pages/complaints');
});

Route::get('/feedback', function () {
    return view('pages/feedback');
});

Route::get('/help', function () {
    return view('pages/help');
});

Route::get('/business', function () {
    return view('pages/business');
});

Route::get('/carloan', function () {
    return view('pages/carloan');
});

Route::get('/education', function () {
    return view('pages/education');
});

Route::get('/profession', function () {
    return view('pages/profession');
});

Route::get('/salaried', function () {
    return view('pages/salaried');
});

Route::get('/loanapplications', function () {
    return view('pages/loanapplication');
});

Route::get('/payments', function () {
    return view('pages/payments');
});

Route::get('/favicon', function () {
    return view('pages/favicon');
});