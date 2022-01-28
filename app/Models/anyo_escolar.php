<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class anyo_escolar extends Model
{
    protected $table = "anyos_escolares";
    use HasFactory;

    protected $fillable = [
        'fechainicio',
        'fechafinal',
        'centro'
    ];
}
