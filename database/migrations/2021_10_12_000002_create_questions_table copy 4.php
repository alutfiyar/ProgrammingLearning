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

            $table->foreign('programming_lang_id')->references('id')->on('programming_languages');
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
