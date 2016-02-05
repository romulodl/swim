<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emails', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('session_id');
            $table->timestamps();
        });

        Schema::create('email_swimmer', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('email_id')->unsigned();
            $table->integer('swimmer_id')->unsigned();

            $table->foreign('email_id')->references('id')->on('emails')->onDelete('cascade');
            $table->foreign('swimmer_id')->references('id')->on('swimmers')->onDelete('cascade');
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
        Schema::drop('emails');
        Schema::drop('email_swimmer');
    }
}
