<?php

namespace App\Http\Controllers;

use App\Models\ProfessionalLoanApplication;
use Illuminate\Http\Request;

class ProfessionalLoanApplicationController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'full_name' => 'required|string',
            'date_of_birth' => 'required|date',
            'address' => 'required|string',
            'contact_details' => 'required|string',
            'marital_status' => 'required|string',
            'qualifications' => 'required|string',
            'experience_years' => 'required|integer',
            'professional_associations' => 'required|string',
            'loan_amount' => 'required|numeric',
            'loan_purpose' => 'required|string',
            'income_tax_returns' => 'required|string',
            'credit_score' => 'required|integer',
            'collateral_offered' => 'required|string',
        ]);

        $application = ProfessionalLoanApplication::create($validatedData);

        return response()->json(['message' => 'Application submitted successfully', 'data' => $application], 201);
    }
}
