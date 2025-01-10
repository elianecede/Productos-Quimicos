<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
        
class Chemical extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'imagen',
        'descripcion',
        'proceso_creacion',
        'historia',
        'usos',
    ];
}
