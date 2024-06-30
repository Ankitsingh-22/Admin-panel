<?php
namespace App\Http\Controllers;

use App\Models\EducationLoan;
use Illuminate\Http\Request;
use App\Http\Resources\EducationLoanResource;

class EducationLoanController extends Controller
{
    public function index()
    {
        return EducationLoanResource::collection(EducationLoan::all());
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'full_name' => 'required|string',
            'date_of_birth' => 'required|date',
            'address' => 'required|string',
            'contact_details' => 'required|string',
            'marital_status' => 'required|string',
            'student_name' => 'required|string',
            'educational_qualifications' => 'required|string',
            'institution_name' => 'required|string',
            'course_details' => 'required|string',
            'loan_amount' => 'required|numeric',
            'annual_income' => 'required|numeric',
            'existing_loans' => 'required|string',
        ]);

        $educationLoan = EducationLoan::create($validatedData);
        return new EducationLoanResource($educationLoan);
    }

    public function show(EducationLoan $educationLoan)
    {
        return new EducationLoanResource($educationLoan);
    }

    public function update(Request $request, EducationLoan $educationLoan)
    {
        $validatedData = $request->validate([
            'full_name' => 'sometimes|required|string',
            'date_of_birth' => 'sometimes|required|date',
            'address' => 'sometimes|required|string',
            'contact_details' => 'sometimes|required|string',
            'marital_status' => 'sometimes|required|string',
            'student_name' => 'sometimes|required|string',
            'educational_qualifications' => 'sometimes|required|string',
            'institution_name' => 'sometimes|required|string',
            'course_details' => 'sometimes|required|string',
            'loan_amount' => 'sometimes|required|numeric',
            'annual_income' => 'sometimes|required|numeric',
            'existing_loans' => 'sometimes|required|string',
        ]);

        $educationLoan->update($validatedData);
        return new EducationLoanResource($educationLoan);
    }

    public function destroy(EducationLoan $educationLoan)
    {
        $educationLoan->delete();
        return response()->noContent();
    }
}
