<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deck extends Model
{
    use HasFactory;


    public function cartas(){

        return $this->hasMany(Carta::class);
    }

    public function jogador(){

        return $this->belongsTo(Jogador::class);
    }
}
