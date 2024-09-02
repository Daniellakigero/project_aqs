<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id('emp_id');  // Primary Key
            $table->string('emp_name');
            $table->string('email')->unique();
            $table->string('company_email')->unique();
            $table->string('phone_number');
            $table->string('verification_code');
            $table->unsignedBigInteger('hod_id');  // Foreign Key
            $table->foreign('hod_id')->references('hod_id')->on('hods')->onDelete('cascade');
            $table->rememberToken(); // For "remember me" functionality
            $table->timestamps();  // created_at and updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
};
