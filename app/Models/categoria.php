<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $fillable = [
        'nombre',
        'tipo',
    ];

    // Relacion de uno a muchos con el modelo Movimiento
    public function movimientos()
    {
        return $this->hasMany(Movimiento::class);
    }
}
