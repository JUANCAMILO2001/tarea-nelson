<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artisticcontent extends Model
{
    use HasFactory;
    protected $table = 'artisticcontents';
    protected $primarykey = 'id';
    protected $fillable = [
        'title',
        'description',
    ];

}
