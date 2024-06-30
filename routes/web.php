<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\BusinessApplicationController;
use App\Http\Controllers\CarApplicationController;
use App\Http\Controllers\EducationLoanController;
use App\Http\Controllers\HomeLoanController;
use App\Http\Controllers\ProfessionalLoanApplicationController;
use App\Http\Controllers\SalariedLoanApplicationController;

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
Route::get('/business-applications', [BusinessApplicationController::class, 'index']);
Route::post('/business-applications', [BusinessApplicationController::class, 'store']);
Route::post('/car-applications', [CarApplicationController::class, 'store']);
Route::apiResource('education-loans', EducationLoanController::class);
Route::get('/home-loans', [HomeLoanController::class, 'index']);
Route::post('/home-loans', [HomeLoanController::class, 'store']);
Route::post('/professional-loan-applications', [ProfessionalLoanApplicationController::class, 'store']);
Route::apiResource('salaried-loan-applications', SalariedLoanApplicationController::class);



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


