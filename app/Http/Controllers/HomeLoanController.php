<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HomeLoan;

class HomeLoanController extends Controller
{
    public function index()
    {
        $homeLoans = HomeLoan::all();
        return response()->json($homeLoans);
    }

    public function store(Request $request)
    {
        $request->validate([
            'full_name' => 'required|string|max:255',
            'date_of_birth' => 'required|date',
            'address' => 'required|string|max:255',
            'contact_details' => 'required|string|max:255',
            'marital_status' => 'required|string|max:255',
            'student_name' => 'required|string|max:255',
            'educational_qualifications' => 'required|string|max:255',
            'institution_name' => 'required|string|max:255',
            'course_details' => 'required|string|max:255',
            'loan_amount' => 'required|numeric',
            'annual_income' => 'required|numeric',
            'existing_loans' => 'nullable|string|max:255',
            'employment_status' => 'required|string|max:255',
            'employer_details' => 'required|string|max:255',
            'job_title' => 'required|string|max:255',
            'work_experience' => 'required|integer',
            'down_payment' => 'required|numeric',
            'property_type' => 'required|string|max:255',
            'property_address' => 'required|string|max:255',
            'property_value' => 'required|numeric',
            'property_documents' => 'required|string',
        ]);

        $homeLoan = HomeLoan::create($request->all());

        return response()->json($homeLoan, 201);
    }
}
