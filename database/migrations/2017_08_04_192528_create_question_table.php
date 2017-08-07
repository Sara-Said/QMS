<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('question', function (Blueprint $table) {
            $table->increments('id');
            $table->text('question');
            $table->integer('question_type_id')->unsigned();
            $table->foreign('question_type_id')->references('id')->on('lkp_questions_type');
            $table->integer('category_id')->unsigned ();
            $table->foreign('category_id')->references('id')->on('lkp_category');
            $table->integer('points');
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
        Schema::drop('question');
    }
}
