<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class anyos_escolares extends Model
{
    use HasFactory;

    protected $fillable = [
        'fechainicio',
        'fechafinal',
        'centro'
    ];
}
