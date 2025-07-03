<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Explorador extends Model
{
    use HasFactory;

    protected $table = 'exploradores'; 

    protected $fillable = [
        'nome',
        'idade',
        'latitude',
        'longitude',
    ];
}
