<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomeLoansTable extends Migration
{
    public function up()
    {
        Schema::create('home_loans', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->date('date_of_birth');
            $table->string('address');
            $table->string('contact_details');
            $table->string('marital_status');
            $table->string('student_name');
            $table->string('educational_qualifications');
            $table->string('institution_name');
            $table->string('course_details');
            $table->decimal('loan_amount', 15, 2);
            $table->decimal('annual_income', 15, 2);
            $table->string('existing_loans')->nullable();
            $table->string('employment_status');
            $table->string('employer_details');
            $table->string('job_title');
            $table->integer('work_experience');
            $table->decimal('down_payment', 15, 2);
            $table->string('property_type');
            $table->string('property_address');
            $table->decimal('property_value', 15, 2);
            $table->text('property_documents');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('home_loans');
    }
}
