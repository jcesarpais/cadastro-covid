<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\cadastro;


class covid19Controller extends Controller
{
    public function cadastrar(){

        return view('cadastro.cadastrar');
    }

    public function buscar(){
        return view('cadastro.buscar');
    }

    public function result(){

        $cadastro = cadastro::all();

        return view ('cadastro.cadastro',['cadastro' => $cadastro]);
    }

}
