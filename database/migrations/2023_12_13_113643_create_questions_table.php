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
            $table->id('QuestionID');
            $table->string('QuestionText', 255);
            $table->unsignedBigInteger('Variant1ID')->nullable(false);
            $table->unsignedBigInteger('Variant2ID')->nullable(false);
            $table->unsignedBigInteger('Variant3ID')->nullable(false);
            $table->unsignedBigInteger('Variant4ID')->nullable(false);
            $table->unsignedBigInteger('AnswerID')->nullable(false);

            $table->foreign('Variant1ID')->references('VariantID')->on('variants');
            $table->foreign('Variant2ID')->references('VariantID')->on('variants');
            $table->foreign('Variant3ID')->references('VariantID')->on('variants');
            $table->foreign('Variant4ID')->references('VariantID')->on('variants');
            $table->foreign('AnswerID')->references('VariantID')->on('variants');
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
