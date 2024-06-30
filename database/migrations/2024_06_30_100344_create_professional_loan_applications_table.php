<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfessionalLoanApplicationsTable extends Migration
{
    public function up()
    {
        Schema::create('professional_loan_applications', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->date('date_of_birth');
            $table->string('address');
            $table->string('contact_details');
            $table->string('marital_status');
            $table->string('qualifications');
            $table->integer('experience_years');
            $table->string('professional_associations');
            $table->decimal('loan_amount', 15, 2);
            $table->string('loan_purpose');
            $table->text('income_tax_returns');
            $table->integer('credit_score');
            $table->string('collateral_offered');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('professional_loan_applications');
    }
}
