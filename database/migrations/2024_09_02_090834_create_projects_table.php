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
        Schema::create('projects', function (Blueprint $table) {
            $table->id('project_id');  // Primary Key
            $table->string('project_name');
            $table->text('description');
            $table->date('start_date');
            $table->date('end_date')->nullable();  // Nullable for ongoing projects
            $table->string('status');  // e.g., Active, Completed, On Hold
            $table->unsignedBigInteger('created_by');  // Foreign Key to Users
            $table->foreign('created_by')->references('id')->on('users')->onDelete('cascade');
            $table->string('project_category');
            $table->unsignedBigInteger('hod_id');  // Foreign Key to HODs
            $table->foreign('hod_id')->references('hod_id')->on('hods')->onDelete('cascade');
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
        Schema::dropIfExists('projects');
    }
};
