<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    use HasFactory;

    protected $fillable = [
        'fecha_entrada',
        'fecha_salida',
        'adultos',
        'menores',
        'animales'
    ];

    public function personas() {

        $adultos=$this->adultos;
        $menores=$this->menores;

        $total=$adultos+$menores;
        
        return $total;
    }

}
