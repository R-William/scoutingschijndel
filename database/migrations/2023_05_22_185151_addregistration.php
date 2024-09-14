<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Addregistration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registrations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('gender');
            $table->string('name')->nullable();
            $table->string('email');
            $table->dateTime('geb_date')->nullable();
            $table->string('phone')->nullable();
            $table->string('comment')->nullable();
            $table->dateTime('sub_date')->nullable();
            $table->string('group');
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
