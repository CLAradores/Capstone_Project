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
            $table->string('middle_name',1)->default();
            $table->string('gender',10)->default();
            // $table->unsignedInteger('your_number')->default(0)->startingValue(11843000);
            // $table->num('age')->nullable();
            $table->string('phone_number')->default();
            $table->string('month_bdate',10)->default();
            $table->integer('day_bdate')->default();
            $table->integer('year_bdate')->default();
            $table->string('street_address')->default();
            $table->string('street_address_line_2')->default();
            $table->string('city',20)->default();
       
            $table->integer('weight')->default()->digit(3);
            $table->integer('height')->default()->digit(5);
            $table->string('contact_first_name',50)->default();
            $table->string('contact_last_name',20)->default();
            $table->string('contact_street_address')->default();
            $table->string('contact_street_address_line_2')->default();
            $table->string('contact_city',20)->default();
         
            $table->string('contact_phone_number')->default();
          
            $table->string('list_reg_med')->default();
            $table->string('list_med_history')->default();
            $table->string('list_allergies')->default();
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
