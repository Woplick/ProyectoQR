<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{

    const ADMINISTRADOR = "ADMINISTRADOR";
    const VENDEDOR = "VENDEDOR";
    const CAJERO = "CAJERO";

    protected $fillable=['rol'];

    
}
