<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('transactions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('buss_id')->unsigned();
            $table->integer('amount')->unsigned();
            $table->integer('trans_mode')->unsigned();
            $table->string('trans_remark')->nullable();
            $table->integer('trans_status')->unsigned();
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
        Schema::dropIfExists('transactions');
    }
}
