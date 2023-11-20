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
        Schema::create('records', function (Blueprint $table) {
            $table->id();
            $table->string('first_name',50)->default();
            $table->string('last_name',20)->default();
            $table->string('middle_name',20)->default();
            $table->string('gender',10)->default();
            $table->integer('age')->default();
            $table->string('phone_number')->default();
            $table->string('month_bdate',10)->default();
            $table->integer('day_bdate')->default();
            $table->integer('year_bdate')->default();
            $table->string('street_address')->default();
            $table->string('street_address_line_2')->default();
            $table->string('city',20)->default();
            // $table->string('state_province',20)->default();
            // $table->integer('postal_zipcode')->default();
            // $table->string('country',20)->default();
            $table->float('weight')->default(0.0);
            $table->string('height', 50);
            $table->string('contact_first_name',50)->default();
            $table->string('contact_last_name',20)->default();
            $table->string('contact_street_address')->default();
            $table->string('contact_street_address_line_2')->default();
            $table->string('contact_city',20)->default();
            // $table->string('contact_state_province',20)->default();
            // $table->integer('contact_postal_zipcode')->default();
            // $table->string('contact_country',20)->default();
            $table->string('contact_phone_number')->default();
            $table->string('hepa')->default();
            $table->string('chicken_pox')->default();
            $table->string('measles')->default();
            $table->string('medical_history')->default();
            $table->string('allergies')->default();
            $table->string('list_reg_med')->default();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('records');
    }
};
