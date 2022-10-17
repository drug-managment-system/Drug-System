<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBillTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Bill', function (Blueprint $table) {
            $table->id();
            $table->string('DrugName');
            $table->bigInteger('Quantity');
            $table->bigInteger('Price');
            $table->bigInteger('Discount');
            $table->bigInteger('Total');
            $table->bigInteger('Stock_ID');
            $table->bigInteger('Loan');
            $table->bigInteger('Cash');
            $table->bigInteger('Customer_ID');
            $table->string('Dilevared_By');
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
        Schema::dropIfExists('Bill');
    }
}
