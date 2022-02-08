<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Centro extends Model
{
    use HasFactory;

    protected $fillable = [
        'codigo',
        'nombre',
        'web',
        'situacion',
        'coordinador',
        'verificado'
    ];

    public function user(){
        return $this->hasOne(User::class, 'Coordinador');
    }
}
