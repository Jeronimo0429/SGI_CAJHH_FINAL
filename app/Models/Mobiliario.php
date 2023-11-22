<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mobiliario extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'mobiliarios';
    protected $fillable = ['serial','nombre','valor','estado','propietario','fechaEntrada','fechaSalida','comentarios'];
}
