<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddCompanyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('AddCompany', function (Blueprint $table) {
            $table->id();
            $table->string('Name','20');
            $table->string('OwnerName');
            $table->string('Address');
            $table->string('Email')->unique();
            $table->bigInteger('Total_Purchase');
            $table->bigInteger('Payment');
            $table->date('Date');
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
        Schema::dropIfExists('AddCompany');
    }
}
