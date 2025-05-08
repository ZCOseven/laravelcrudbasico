<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory; // Importante para usar las fábricas de datos (factories)

class Post extends Model
{
    use HasFactory; // Habilita las fábricas de datos (PostFactory) para este modelo

    // Especifica las columnas que se pueden asignar en masa (mass assignment)
    protected $fillable = ['title', 'description'];
}
