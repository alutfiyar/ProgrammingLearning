<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgrammingLanguages extends Model
{
    protected $fillable = ['language'];
    public $timestamps = false;
    use HasFactory;
}
