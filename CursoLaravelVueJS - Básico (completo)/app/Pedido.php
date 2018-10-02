<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Persona;
use App\Vianda;

class Pedido extends Model
{
    //
    protected $fillable = ['persona_id', 'vianda_id', 'fecha_solicitud', 'fecha_entrega'];

    public function persona()
    {
    return $this->belongsTo(Persona::class);
    }

    public function vianda()
    {
    return $this->belongsTo(Vianda::class);
    }
}
