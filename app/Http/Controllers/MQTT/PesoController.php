<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Peso;

class PesoController extends Controller
{
    public function index()
    {
        $peso = Peso::all();


        $puntos = [];
        foreach ($peso as $p) {
            $puntos[] = ['name' => $p['nombre'], 'y' => floatval($p['porcenaje'])];
        }
        return view('graficos', ['data' => json_encode($puntos)]);
    }
}
