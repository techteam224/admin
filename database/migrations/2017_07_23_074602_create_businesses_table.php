<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBusinessesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('businesses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('buss_name',100)->unique();
            $table->string('buss_owner_name',50);
            $table->string('email')->unique();
            $table->string('password');
            $table->integer('busscategory')->unsigned();
            $table->integer('busstype')->unsigned();
            $table->string('bussaddress');
            $table->integer('busscontact');
            $table->rememberToken();
            $table->boolean('subscription_state');
            $table->timestamp('subscription_expires');
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
        Schema::dropIfExists('businesses');
    }
}
