<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalariedLoanApplicationsTable extends Migration
{
    public function up()
    {
        Schema::create('salaried_loan_applications', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->date('date_of_birth');
            $table->string('address');
            $table->string('contact_details');
            $table->string('marital_status');
            $table->string('employment_status');
            $table->string('employer_address');
            $table->string('job_title');
            $table->string('job_type');
            $table->text('bank_statements');
            $table->decimal('loan_amount', 10, 2);
            $table->text('existing_loans');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('salaried_loan_applications');
    }
}
