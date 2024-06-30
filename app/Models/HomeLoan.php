<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeLoan extends Model
{
    use HasFactory;

    protected $fillable = [
        'full_name',
        'date_of_birth',
        'address',
        'contact_details',
        'marital_status',
        'student_name',
        'educational_qualifications',
        'institution_name',
        'course_details',
        'loan_amount',
        'annual_income',
        'existing_loans',
        'employment_status',
        'employer_details',
        'job_title',
        'work_experience',
        'down_payment',
        'property_type',
        'property_address',
        'property_value',
        'property_documents',
    ];
}
