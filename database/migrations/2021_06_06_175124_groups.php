<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Groups extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('groups', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->integer('age-min');
            $table->integer('age-max');
        });

        Schema::create('sub-groups', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('group_id');
            $table->string('name');
            $table->string('date');
            $table->string('start_time');
            $table->string('end_time');
            $table->integer('gender');
            $table->string('contact_persoon');
            $table->string('email');
            
            /*$table->foreign('group_id')
                ->references('id')
                ->on('groups');*/
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
