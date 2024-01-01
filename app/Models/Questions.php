<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Questions extends Model
{
    protected $fillable = [
        'question_ru',
        'question_eng',
        'diff_level',
        'concept',
        'programming_lang_id',
        'option1_id',
        'option2_id',
        'option3_id',
        'option4_id',
        'answer_id'
    ];
    public $timestamps = false;
    use HasFactory;
}
