<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('car_applications', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->date('date_of_birth');
            $table->string('address');
            $table->string('contact_details');
            $table->string('marital_status');
            $table->string('employment_status');
            $table->string('employer_details');
            $table->string('job_title');
            $table->integer('work_experience');
            $table->decimal('loan_amount', 10, 2);
            $table->decimal('down_payment', 10, 2);
            $table->string('existing_loans');
            $table->string('car_make_model');
            $table->string('car_type');
            $table->decimal('car_price', 10, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('car_applications');
    }
}
