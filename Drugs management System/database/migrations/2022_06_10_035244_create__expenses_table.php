<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExpensesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Expenses', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('Amount');
            $table->string('Detail');
            $table->string('Name');
            $table->string('Photo')->nullable();
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
        Schema::dropIfExists('Expenses');
    }
}
