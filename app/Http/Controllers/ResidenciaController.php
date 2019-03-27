<?php

namespace App\Http\Controllers;

use App\Residencia;
use Illuminate\Http\Request;

class ResidenciaController extends Controller {

    public function novaResidencia () {
       return view('formularioDeResidencia');
    }

    public function listaResidencia () {
        $residencias = Residencia::all();
        return view('listaDeResidenciasCadastradas')->with('residencias', $residencias);
    }
}
