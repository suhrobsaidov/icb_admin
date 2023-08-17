<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoansCalculatorFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loans_calculator_forms', function (Blueprint $table) {
            $table->id();
            $table->string('surname');
            $table->string('name');
            $table->string('middle_name');
            $table->string('e_mail');
            $table->string('phone_number');
            $table->string('additional_phone_number');
            $table->string('loan_product');
            $table->string('loan_currency');
            $table->string('loan_amount');
            $table->string('loan_term');
            $table->string('loan_purpose');
            $table->string('occupation');
            $table->string('city_district');
            $table->string('region');
            $table->string('address_where_registered');
            $table->string('monthly_family_income');
            $table->string('branch');
            $table->string('phone_number_for');
            $table->string('photo')->nullable();
            $table->string('passport')->nullable();
            $table->string('other_documents')->nullable();
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
        Schema::dropIfExists('loans_calculator_forms');
    }
}
