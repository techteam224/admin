<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('buss_id')->references('id')->on('businesses');
            $table->integer('amount');
            $table->integer('trans_type')->references('id')->on('transactions_master');
            $table->integer('trans_mode')->references('id')->on('transactions_mode_master');
            $table->string('trans_remarks',250);
            $table->char('trans_state',1);
            $table->timestamp('trans_at');
            $table->integer('created_by')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payments');
    }
}
