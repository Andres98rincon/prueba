<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Producto extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre_producto',
        'descripcion',
        'precio',
        'estado',
        'fecha_publicacion',
    ];


       public function nombre_producto(): Attribute
        {
            return new Attribute(
                get: fn ($value) => ucwords($value),
                set: fn ($value) => ucwords($value),
            );
        }
    
}
