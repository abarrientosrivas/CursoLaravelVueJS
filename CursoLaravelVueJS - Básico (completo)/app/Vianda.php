<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Pedido;

class Vianda extends Model
{
    //
    protected $fillable = ['nombre', 'descripcion', 'precio','vegetariana'];

    public function pedido()
    {
    return $this->hasOne(Pedido::class);
    }
}
