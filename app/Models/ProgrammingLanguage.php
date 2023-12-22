<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgrammingLanguage extends Model
{
    protected $table = 'programming_language';
    protected $fillable = ['language'];
    use HasFactory;
    public $timestamps = false;
}
