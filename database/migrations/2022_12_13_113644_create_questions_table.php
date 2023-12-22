<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->id('id');
            $table->string('title_ru')->unique()->nullable(false);
            $table->string('title_eng')->unique()->nullable(false);
            $table->unsignedBigInteger('programming_lang_id')->nullable(false);
            $table->unsignedBigInteger('diff_level')->nullable(false);
            $table->string('used_concept')->nullable();
            $table->unsignedBigInteger('opt1_id')->nullable(false);
            $table->unsignedBigInteger('opt2_id')->nullable(false);
            $table->unsignedBigInteger('opt3_id')->nullable(false);
            $table->unsignedBigInteger('opt4_id')->nullable(false);
            $table->unsignedBigInteger('answer_id')->nullable(false);

            $table->foreign('opt1_id')->references('id')->on('programming_language');
            $table->foreign('opt2_id')->references('id')->on('programming_language');
            $table->foreign('opt3_id')->references('id')->on('programming_language');
            $table->foreign('opt4_id')->references('id')->on('programming_language');
            $table->foreign('answer_id')->references('id')->on('programming_language');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('questions');
    }
};