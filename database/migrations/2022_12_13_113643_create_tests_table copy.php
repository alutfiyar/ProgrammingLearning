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
        Schema::create('tests', function (Blueprint $table) {
            $table->id('id');
            $table->string('title_ru')->unique();
            $table->string('title_eng')->unique();
            $table->unsignedBigInteger('test_count')->nullable()->default(10);
            $table->unsignedBigInteger('passing_time')->nullable()->default(10);
            $table->string('test_lang')->nullable()->default('english');
            $table->string('test_diff')->nullable()->default('ease');
            $table->unsignedBigInteger('programming_lang_id')->nullable(false);

            $table->foreign('programming_lang_id')->references('id')->on('programming_language');
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