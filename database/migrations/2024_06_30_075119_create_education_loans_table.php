<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEducationLoansTable extends Migration
{
    public function up()
    {
        Schema::create('education_loans', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->date('date_of_birth');
            $table->string('address');
            $table->string('contact_details');
            $table->string('marital_status');
            $table->string('student_name');
            $table->string('educational_qualifications');
            $table->string('institution_name');
            $table->text('course_details');
            $table->decimal('loan_amount', 15, 2);
            $table->decimal('annual_income', 15, 2);
            $table->text('existing_loans');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('education_loans');
    }
}
