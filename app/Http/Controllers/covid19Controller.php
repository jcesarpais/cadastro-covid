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

        $res = cadastro::all();

        return view ('cadastro.result', ['res' => $res]);
    }

}
