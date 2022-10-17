<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDrugsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Drugs', function (Blueprint $table) {
            $table->id();
            $table->string('DrugName');
            $table->bigInteger('Quantity');
            $table->bigInteger('Price');
            $table->string('Category');
            $table->date('ExpireDate');
            $table->bigInteger('AddCompany_ID');
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
        Schema::dropIfExists('Drugs');
    }
}
