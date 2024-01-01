<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Admin;

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
            $table->id();
            $table->string('question_ru')->nullable(false)->unique();
            $table->string('question_eng')->nullable(false)->unique();
            $table->string('diff_level')->nullable()->default('average');
            $table->string('concept')->nullable(false);
            $table->unsignedBigInteger('programming_lang_id')->nullable(false);

            $table->unsignedBigInteger('option1_id')->nullable(false);
            $table->unsignedBigInteger('option2_id')->nullable(false);
            $table->unsignedBigInteger('option3_id')->nullable(false);
            $table->unsignedBigInteger('option4_id')->nullable(false);
            $table->unsignedBigInteger('answer_id')->nullable(false);

            $table->foreign('programming_lang_id')->references('id')->on('programming_languages');
            $table->foreign('option1_id')->references('id')->on('options');
            $table->foreign('option2_id')->references('id')->on('options');
            $table->foreign('option3_id')->references('id')->on('options');
            $table->foreign('option4_id')->references('id')->on('options');
            $table->foreign('answer_id')->references('id')->on('options');
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
