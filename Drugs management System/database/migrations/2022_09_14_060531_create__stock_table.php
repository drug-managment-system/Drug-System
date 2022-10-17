<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStockTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Stock', function (Blueprint $table) {
            $table->id();
            $table->string('StockName');
            $table->string('DrugName');
            $table->bigInteger('Quantity');
            $table->string('Category');
            $table->bigInteger('Drug_ID');
            $table->date('ExpireDate');
            $table->date('EntryDate');
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
        Schema::dropIfExists('Stock');
    }
}
