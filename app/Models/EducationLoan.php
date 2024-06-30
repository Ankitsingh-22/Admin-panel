<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class EducationLoanResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'full_name' => $this->full_name,
            'date_of_birth' => $this->date_of_birth,
            'address' => $this->address,
            'contact_details' => $this->contact_details,
            'marital_status' => $this->marital_status,
            'student_name' => $this->student_name,
            'educational_qualifications' => $this->educational_qualifications,
            'institution_name' => $this->institution_name,
            'course_details' => $this->course_details,
            'loan_amount' => $this->loan_amount,
            'annual_income' => $this->annual_income,
            'existing_loans' => $this->existing_loans,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
