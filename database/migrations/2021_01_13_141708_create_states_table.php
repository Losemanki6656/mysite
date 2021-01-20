<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('states', function (Blueprint $table) {
            $table->id();
            $table->integer('idvacan');
            $table->string('first_name');
            $table->string('last_name');            
            $table->string('middle_name');
            $table->string('dataroj');
            $table->string('malumot');
            $table->string('institut');
            $table->string('xarbiy');
            $table->string('mestoroj');
            $table->string('telnomer');
            $table->string('pass_seriya');
            $table->string('pass_number');
            $table->string('ans_cout')->nullable();
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
        Schema::dropIfExists('states');
    }
}
