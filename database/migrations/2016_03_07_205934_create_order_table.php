<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->integer('customer_id')->unsigned();

            $table->integer('price')->unsigned();
            $table->integer('amount')->unsigned();
            $table->integer('sum')->unsigned();

            $table->string('name');
            $table->longText('description');
            $table->string('path');
            $table->date('ready');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('user');
            $table->foreign('customer_id')->references('id')->on('customer');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('order');
    }
}