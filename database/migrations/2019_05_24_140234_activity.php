<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Activity extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activity', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('translator_id');
            $table->unsignedInteger('job_id');
            $table->integer('status')->nullable();//0= requesting, 1=accepted, 2=returned //3=rejected
            $table->dateTime('request_date')->nullable();
            $table->dateTime('accept_date')->nullable();
            $table->dateTime('return_date')->nullable();//{{ date('Y-m-d H:i:s') }}
            $table->dateTime('reject_date')->nullable();
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users');
            
            $table->foreign('translator_id')->references('id')->on('users');
            
            $table->foreign('job_id')->references('id')->on('job');
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
    }
}
