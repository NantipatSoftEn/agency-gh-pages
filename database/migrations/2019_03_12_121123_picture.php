<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Picture extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Picture', function (Blueprint $table) {
            $table->increments('id');
            $table->string('path');
            $table->integer('gallery_id');
            $table->foreign('gallery_id')->references('id')->on('Gallery')->onDelete('cascade');
            $table->timestamps('create_on');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Schema::drop('Picture');
    }
}
