@extends('layouts.app')

@section('title', 'Resultado Busca')

@section('content')

@foreach($pacientes as $cadastro)
    <div class="container">
        <div class="row justify-content-center">

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($erros->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

            <div class="col-md-8">
                <table class="table mt-3">
                    <thead class="thead-dark">

                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Genero</th>
                            <th scope="col">Cart. SUS</th>
                            <th scope="col">RG</th>
                            <th scope="col">CPF</th>
                            <th scope="col">CEP</th>
                            <th scope="col">Endereço</th>
                            <th scope="col">Cidade</th>
                            <th scope="col">Estado</th>
                            <th scope="col">Teste Covid</th>
                            <th scope="col">...</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $cadastro->id }} </td>
                            <td class="@error('title') is-invalid @enderror" >{{ $cadastro->nome }}</td>
                            <td>{{ $cadastro->genero }}</td>
                            <td>{{ $cadastro->sus }}</td>
                            <td>{{ $cadastro->RG }}</td>
                            <td>{{ $cadastro->CPF }}</td>
                            <td>{{ $cadastro->CEP }}</td>
                            <td>{{ $cadastro->ENDERECO }}</td>
                            <td>{{ $cadastro->CIDADE }}</td>
                            <td>{{ $cadastro->ESTADO }}</td>
                            <td>{{ $cadastro->teste }}</td>
                            <td>
                                <a href="{{ route('cadastro.edit', ['id' => $cadastro->id]) }}" class="btn btn-dark">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                        <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                                    </svg>
                                </a>
                                
                            </td>
                        </tr>
                    </tbody>
 
                </table>
                
            </div>
        </div>
    </div>
@endforeach
<div class="back">
    <a href="{{ route('home')}} "> <button type="button" class="btn btn-primary">Voltar</button></a>
</div>
@endsection