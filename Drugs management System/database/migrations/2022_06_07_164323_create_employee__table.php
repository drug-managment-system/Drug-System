<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Employee', function (Blueprint $table) {
           
            $table->id();
            $table->string('Photo')->nullable();
            $table->string('Name','20');
            $table->string('FatherName');
            $table->string('Address');
            $table->string('Email')->unique();
            $table->bigInteger('Salary');
            $table->date('IncomeDate');
            $table->bigInteger('DepID');
            $table->string('Job');
           

            $table->bigInteger('Trash')->default("0");
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
        Schema::dropIfExists('Employee');
    }
}
