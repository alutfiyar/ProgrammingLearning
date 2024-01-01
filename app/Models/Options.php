<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Options extends Model
{
    protected $fillable = [
        'option_eng',
        'option_ru'
    ];
    public $timestamps = false;
    use HasFactory;
}
