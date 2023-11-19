<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('patient_records', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name',50);
            $table->string('last_name',20);
            $table->string('middle_name',20);
            $table->string('gender',10);
            $table->integer('age');
            $table->string('phone_number');
            $table->string('month_bdate',10);
            $table->integer('day_bdate');
            $table->integer('year_bdate');
            $table->string('street_address');
            $table->string('street_address_line_2');
            $table->string('city',20);
            $table->string('state_province',20);
            $table->integer('postal_zipcode');
            $table->string('country',20);
            $table->float('weight');
            $table->float('height');
            $table->string('contact_first_name',50);
            $table->string('contact_last_name',20);
            $table->string('contact_street_address');
            $table->string('contact_street_address_line_2');
            $table->string('contact_city',20);
            $table->string('contact_state_province',20);
            $table->integer('contact_postal_zipcode');
            $table->string('contact_country',20);
            $table->string('contact_phone_number');
            $table->string('hepa');
            $table->string('chicken_pox');
            $table->string('medical_history');
            $table->string('allergies');
            $table->string('list_reg_med');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patient_records');
    }
};
