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

<<<<<<< HEAD
    public function user(){
        return $this->hasOne(User::class, 'Coordinador');
=======
    public function user() {
        return $this->belongsTo(User::class, 'coordinador');
>>>>>>> dd4f6ffaea26659a4dbccb8c93733a1cefe849ec
    }
}
