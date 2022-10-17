<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMoneyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    { 
          
         
         
        
        Schema::create('Money', function (Blueprint $table) {
            $table->id(); 
            $table->bigInteger('Total_Blance');
            $table->bigInteger('Pre_Blance');
            $table->bigInteger('Loan');
            $table->bigInteger('Cash');
            $table->bigInteger('Bill_ID');
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
        Schema::dropIfExists('Money');
    }
}
