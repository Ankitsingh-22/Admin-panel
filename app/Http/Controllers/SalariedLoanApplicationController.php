<?php
namespace App\Http\Controllers;

use App\Models\SalariedLoanApplication;
use Illuminate\Http\Request;

class SalariedLoanApplicationController extends Controller
{
    public function index()
    {
        return SalariedLoanApplication::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'full_name' => 'required|string|max:255',
            'date_of_birth' => 'required|date',
            'address' => 'required|string|max:255',
            'contact_details' => 'required|string|max:255',
            'marital_status' => 'required|string|max:255',
            'employment_status' => 'required|string|max:255',
            'employer_address' => 'required|string|max:255',
            'job_title' => 'required|string|max:255',
            'job_type' => 'required|string|max:255',
            'bank_statements' => 'required|string',
            'loan_amount' => 'required|numeric',
            'existing_loans' => 'required|string',
        ]);

        $salariedLoanApplication = SalariedLoanApplication::create($request->all());

        return response()->json($salariedLoanApplication, 201);
    }

    public function show($id)
    {
        return SalariedLoanApplication::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $salariedLoanApplication = SalariedLoanApplication::findOrFail($id);
        $salariedLoanApplication->update($request->all());

        return response()->json($salariedLoanApplication, 200);
    }

    public function destroy($id)
    {
        SalariedLoanApplication::findOrFail($id)->delete();

        return response()->json(null, 204);
    }
}
