<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

//MONGO DB
use MongoDB\Laravel\Eloquent\Model;

class MetodoPago extends Model
{
    use HasFactory;

    protected $collection = 'metodo_pago';

    protected $fillable = [
        'nombre',
        'descripcion',
        'imagen',
    ];
}
