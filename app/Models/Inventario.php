<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventario extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'inventarios';
    protected $fillable = ['serial','modelo','marca','valor','fechaAdquisicion','fechaSalida'];
}
