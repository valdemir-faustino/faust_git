<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rota extends Model
{
    protected $fillable=
    [
       'name'
    ];
     protected $table='rotas';
}
