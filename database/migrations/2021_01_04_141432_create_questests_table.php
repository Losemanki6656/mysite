<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questests', function (Blueprint $table) {
            $table->id();
            $table->integer('idvacancies');
            $table->string('question');
            $table->string('a_ans');
            $table->string('b_ans');
            $table->string('c_ans');
            $table->string('d_ans');
            $table->string('answerques');
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
        Schema::dropIfExists('questests');
    }
}
