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
        Schema::create('customer_registration', function (Blueprint $table) {
            $table->id('customer_id');
            $table->string('Name');
            $table->string('Email', 30);
            $table->string('Password');
            $table->string('Country');
            $table->string('City');
            $table->text('Address');
            $table->enum('Gender' , ["Male" , "Female" , "Other"]);
            $table->date('DOB');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customer_registration');
    }
};
