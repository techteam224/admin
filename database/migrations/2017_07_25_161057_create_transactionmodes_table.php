<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionmodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
         Schema::create('transactionmodes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('mode',50)->unique();
            $table->timestamps();
            $table->integer('created_by')->unsigned();
            $table->integer('updated_by')->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('transactionmodes');

    }
}
