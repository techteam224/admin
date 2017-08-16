<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateForeignkeyTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            //
            $table->foreign('role')->references('id')->on('roles');
            $table->foreign('created_by')->nullable()->references('id')->on('users');
            $table->foreign('updated_by')->nullable()->references('id')->on('users');

        });

        Schema::table('businesses', function (Blueprint $table) {
            //
            $table->foreign('busstype')->references('id')->on('busstypes');
            $table->foreign('created_by')->references('id')->on('users');
            $table->foreign('updated_by')->references('id')->on('users');

        });


        Schema::table('transactionmodes', function (Blueprint $table) {
            //
            $table->foreign('created_by')->references('id')->on('users');
            $table->foreign('updated_by')->references('id')->on('users');

        });

        Schema::table('busscategories', function (Blueprint $table) {
            //
            $table->foreign('created_by')->references('id')->on('users');
            $table->foreign('updated_by')->references('id')->on('users');

        });


        Schema::table('roles', function (Blueprint $table) {
            //
            $table->foreign('created_by')->nullable()->references('id')->on('users');
            $table->foreign('updated_by')->nullable()->references('id')->on('users');

        });


        Schema::table('busstypes', function (Blueprint $table) {
            //
            $table->foreign('category')->references('id')->on('busscategories');
            $table->foreign('created_by')->references('id')->on('users');
            $table->foreign('updated_by')->references('id')->on('users');

        });


        Schema::table('transactions', function (Blueprint $table) {
            //
            $table->foreign('buss_id')->references('id')->on('businesses');
            $table->foreign('trans_mode')->references('id')->on('transactionmodes');
            $table->foreign('created_by')->references('id')->on('users');
            $table->foreign('updated_by')->references('id')->on('users');
        });

        }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
            $table->dropForeign(['role','created_by','updated_by']);

        });

        Schema::table('businesses', function (Blueprint $table) {
            //
            $table->dropForeign(['busstype','created_by','updated_by']);

        });

        Schema::table('transactionmodes', function (Blueprint $table) {
            //
            $table->dropForeign(['created_by','updated_by']);

        });

        Schema::table('busscategories', function (Blueprint $table) {
            //
            $table->dropForeign(['created_by','updated_by']);

        });


        Schema::table('roles', function (Blueprint $table) {
            //
            $table->dropForeign(['created_by','updated_by']);

        });

        Schema::table('busstypes', function (Blueprint $table) {
            //
            $table->dropForeign(['category','created_by','updated_by']);

        });


        Schema::table('transactions', function (Blueprint $table) {
            //
            $table->dropForeign(['buss_id','trans_mode','created_by','updated_by']);

        });



    }
}
