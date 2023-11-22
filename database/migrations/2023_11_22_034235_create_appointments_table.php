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
        Schema::create('appointments', function (Blueprint $table) {
            $table->id('id');
            $table->string('gender')->default('');
            $table->integer('age')->default(0);
            $table->date('birth_date')->nullable();
            $table->string('phone')->default('');
            $table->string('appointment_status')->default('');
            $table->string('service_type');
            $table->date('appointment_date');
            $table->unsignedInteger('queue_number');
            $table->string('last_name')->default(''); // Add this line
            $table->string('first_name')->default(''); // Add this line
            $table->string('address')->default(''); // Add this line
            $table->string('concern')->default(''); // Add this line
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointments');
    }
};
