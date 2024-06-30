<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarApplication extends Model
{
    use HasFactory;

    protected $fillable = [
        'full_name',
        'date_of_birth',
        'address',
        'contact_details',
        'marital_status',
        'employment_status',
        'employer_details',
        'job_title',
        'work_experience',
        'loan_amount',
        'down_payment',
        'existing_loans',
        'car_make_model',
        'car_type',
        'car_price',
    ];
}
