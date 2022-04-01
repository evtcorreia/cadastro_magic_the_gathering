<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jogador extends Model
{

    use HasFactory;

   // public $timestamps = false;

    public function decks(){

            return hasMany(Deck::class, 'jogador_id', 'id');

    }
}
