<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BusinessApplication;

class BusinessApplicationController extends Controller
{
    public function index()
    {
        return BusinessApplication::all();
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'business_name' => 'required|string|max:255',
            'business_address' => 'required|string|max:255',
            'business_structure' => 'required|string|max:255',
            'business_nature' => 'required|string|max:255',
            'loan_amount' => 'required|numeric',
            'loan_purpose' => 'required|string|max:255',
            'existing_debts' => 'required|string|max:255',
            'credit_score' => 'required|integer',
            'collateral_offered' => 'required|string|max:255',
            'owner_full_name' => 'required|string|max:255',
            'owner_date_of_birth' => 'required|date',
            'owner_address' => 'required|string|max:255',
            'owner_contact_details' => 'required|string|max:255',
        ]);

        $businessApplication = BusinessApplication::create($validatedData);

        return response()->json($businessApplication, 201);
    }
}
