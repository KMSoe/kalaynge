<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuizQuestionAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quiz_question_answers', function (Blueprint $table) {
            $table->id();
            $table->string('text')->nullable();
            $table->text('description')->nullable();
            $table->string('audio')->nullable();
            $table->string('video')->nullable();
            $table->foreignId('quiz_question_id')->references('id')->on('quiz_questions');
            $table->foreignId('quiz_answer_id')->references('id')->on('quiz_answers');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('quiz_question_answers');
    }
}
