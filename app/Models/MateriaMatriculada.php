<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MateriaMatriculada extends Model
{
    use HasFactory;
    protected $table = 'materias_matriculadas';

    protected $fillable = [
        'alumno',
        'materia',
        'grupo'
    ];
}
