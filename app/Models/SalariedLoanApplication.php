<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalariedLoanApplication extends Model
{
    use HasFactory;

    protected $fillable = [
        'full_name',
        'date_of_birth',
        'address',
        'contact_details',
        'marital_status',
        'employment_status',
        'employer_address',
        'job_title',
        'job_type',
        'bank_statements',
        'loan_amount',
        'existing_loans',
    ];
}
