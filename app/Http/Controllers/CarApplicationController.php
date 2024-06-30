<?php

namespace App\Http\Controllers;

use App\Models\CarApplication;
use Illuminate\Http\Request;

class CarApplicationController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'full_name' => 'required|string|max:255',
            'date_of_birth' => 'required|date',
            'address' => 'required|string|max:255',
            'contact_details' => 'required|string|max:255',
            'marital_status' => 'required|string|max:255',
            'employment_status' => 'required|string|max:255',
            'employer_details' => 'required|string|max:255',
            'job_title' => 'required|string|max:255',
            'work_experience' => 'required|integer',
            'loan_amount' => 'required|numeric',
            'down_payment' => 'required|numeric',
            'existing_loans' => 'required|string|max:255',
            'car_make_model' => 'required|string|max:255',
            'car_type' => 'required|string|max:255',
            'car_price' => 'required|numeric',
        ]);

        $carApplication = CarApplication::create($validatedData);

        return response()->json(['message' => 'Application submitted successfully', 'data' => $carApplication], 201);
    }
}
