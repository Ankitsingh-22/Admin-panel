<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusinessApplication extends Model
{
    use HasFactory;

    protected $fillable = [
        'business_name',
        'business_address',
        'business_structure',
        'business_nature',
        'loan_amount',
        'loan_purpose',
        'existing_debts',
        'credit_score',
        'collateral_offered',
        'owner_full_name',
        'owner_date_of_birth',
        'owner_address',
        'owner_contact_details',
    ];
}
