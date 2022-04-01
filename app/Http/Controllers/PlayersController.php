<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;

use App\Models\Jogador;

class PlayersController extends Controller
{
    public function index(){

        $player = Jogador::all();



        return view('/players/index',[

            'jogador' => $player
        ]);

    }

}
