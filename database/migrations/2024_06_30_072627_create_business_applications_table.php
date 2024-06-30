<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBusinessApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('business_applications', function (Blueprint $table) {
            $table->id();
            $table->string('business_name');
            $table->string('business_address');
            $table->string('business_structure');
            $table->string('business_nature');
            $table->decimal('loan_amount', 15, 2);
            $table->string('loan_purpose');
            $table->string('existing_debts');
            $table->integer('credit_score');
            $table->string('collateral_offered');
            $table->string('owner_full_name');
            $table->date('owner_date_of_birth');
            $table->string('owner_address');
            $table->string('owner_contact_details');
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
        Schema::dropIfExists('business_applications');
    }
}
