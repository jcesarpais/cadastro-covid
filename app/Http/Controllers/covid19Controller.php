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

   public function result(Request $request){

        $search = $request->get('search');
        
        $pacientes = cadastro::where('nome', 'LIKE', '%'.$search.'%')->get();
        
        return view ('cadastro.result', ['pacientes' => $pacientes]);
    } 

    public function store(Request $request){

        $pacientes = cadastro::create($request->all());
        
        return redirect()->route('cadastro.cadastrar');
    }

    public function edit($id){

        $pacientes = cadastro::where('id', $id)->first();

        if(!empty($pacientes)){

            return view ('cadastro.edit', ['pacientes' => $pacientes]);

        }
        else{

            return redirect()->route('cadastro.result');
        }
        
    }

    public function update(Request $request, $id){

        
        $pacientes = [
            'nome' => $request->nome,
            'genero' => $request->genero,
            'sus' => $request->sus,
            'rg' => $request->rg,
            'cpf' => $request->cpf,
            'cep' => $request->cep,
            'cidade' => $request->cidade,
            'estado' => $request->estado,
            'teste' => $request->teste,
            
        ];

        cadastro::where('id', $id)->update($pacientes);

        return redirect()->route('cadastro.result');

    }

}
