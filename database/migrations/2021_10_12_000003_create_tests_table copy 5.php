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
        Schema::create('tests', function (Blueprint $table) {
            $table->id();
            $table->string('title_ru')->nullable(false)->unique();
            $table->string('title_eng')->nullable(false)->unique();
            $table->string('test_lang')->nullable(false);
            $table->string('diff_level')->nullable(false);
            $table->unsignedBigInteger('test_count')->nullable()->default(10);
            $table->unsignedBigInteger('passing_time')->nullable()->default(10);
            $table->unsignedBigInteger('programming_lang_id')->nullable(false);
            $table->unsignedBigInteger('option1_id')->nullable(false);
            $table->unsignedBigInteger('option2_id')->nullable(false);
            $table->unsignedBigInteger('option3_id')->nullable(false);
            $table->unsignedBigInteger('option4_id')->nullable(false);
            $table->unsignedBigInteger('answer_id')->nullable(false);

            $table->foreign('programming_lang_id')->references('id')->on('programming_languages');
            $table->foreign('option1_id')->references('id')->on('programming_languages');
            $table->foreign('option2_id')->references('id')->on('programming_languages');
            $table->foreign('option3_id')->references('id')->on('programming_languages');
            $table->foreign('option4_id')->references('id')->on('programming_languages');
            $table->foreign('answer_id')->references('id')->on('programming_languages');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tests');
    }
};
