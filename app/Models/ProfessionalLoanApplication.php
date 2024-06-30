<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfessionalLoanApplication extends Model
{
    use HasFactory;

    protected $fillable = [
        'full_name', 'date_of_birth', 'address', 'contact_details', 'marital_status', 
        'qualifications', 'experience_years', 'professional_associations', 
        'loan_amount', 'loan_purpose', 'income_tax_returns', 'credit_score', 
        'collateral_offered'
    ];
}
