<?php
use App\Http\Controllers\HomeLoanController;
// use App\Http\Controllers\FormController;
use App\Http\Controllers\SalariedLoanApplicationController;
use App\Http\Controllers\ProfessionalLoanApplicationController;
use App\Http\Controllers\EducationLoanController;
use App\Http\Controllers\CarApplicationController;
use App\Http\Controllers\BusinessApplicationController;

Route::post('/home_loans', [HomeLoanController::class, 'store']);
// Route::post('/home-loan-applications', [FormController::class, 'store']);
Route::post('/salaried_loan_applications', [SalariedLoanApplicationController::class, 'store']);
Route::post('/professional_loan_applications', [ProfessionalLoanApplicationController::class, 'store']);
Route::post('/education_loans', [EducationLoanController::class, 'store']);
Route::post('/car_applications', [CarApplicationController::class, 'store']);
Route::post('/business_applications', [BusinessApplicationController::class, 'store']);
