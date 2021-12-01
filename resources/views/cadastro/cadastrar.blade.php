@extends('layouts.app')

@section('title', 'Cadastrando Pacientes')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <section class="area_form">
            
                        <form id="formulario" action="{{ route('cadastro.store') }}" method="POST">
                            @csrf
                            <div class="form-check">
                                <label for="nome">Nome Completo</label>
                                <input type="text" id="nome" name="nome" class="form-control" placeholder="Digite o nome do Paciênte...">
                            </div>
                            <div class="form-check">
                                <label>Sexo</label>
                            
                                <div class="form-check">
                                    <label for="" class="form-label">
                                        <input type="radio" id="genero" name="genero" class="form-check-input" value="M"> Masculino
                                    </label>
                                </div>
                                <div class="form-check">
                                    <label for="" class="form-label">
                                        <input type="radio" id="genero" name="genero" class="form-check-input" value="F"> Feminino
                                    </label>
                                </div>
                            </div>
                            <div class="form-check">
                                <label for="sus" class="form-label">Nº CARTÃO SUS</label>
                                <input type="text" id="sus" class="form-control" name="sus" placeholder="123 4567 8910 1112">
                            </div>
                            <div class="form-check">
                                <label for="rg" class="form-label">RG</label>
                                <input type="text" id="rg" class="form-control" name="rg" placeholder="11.111.111-1">
                            </div>
                            <div class="form-check">
                                <label for="cpf" class="form-label">CPF</label>
                                <input type="text" id="cpf" class="form-control" name="cpf" placeholder="111.111.111-11">
                            </div>                  
                            <div class="form-check">
                                <label for="cep" class="form-label">CEP</label>
                                <input type="text" id="cep" class="form-control" name="cep" placeholder="11.111-111">
                            </div>
                            <div class="form-check">
                                <label for="endereco" class="form-label">Endereço</label>
                                <input type="text" id="endereco" class="form-control" name="endereco" placeholder="Digite o endereço...">
                            </div>
                            <div class="form-check">                    
                                <label for="cidade" class="form-label">Cidade</label>
                                <input type="text" id="cidade" class="form-control" name="cidade" placeholder="Digite a cidade...">
                            </div>
                            <div class="form-check">
                                <label for="estado" class="form-label">Estado</label>
                                <input type="text" id="estado" class="form-control" name="estado" placeholder="Digite o estado que reside...">
                            </div>
                            <div class="form-check">
                                <label class="form-label">TESTE COVID</label>
                                <div class="form-check">
                                    <label for="" class="form-check-label">
                                        <input type="radio" name="teste" value="POSITIVO" class="form-check-input"> POSITIVO
                                    </label>
                                </div>
                                <div class="form-check">
                                    <label for="" class="form-check-label">
                                        <input type="radio" name="teste" value="NEGATIVO" class="form-check-input"> NEGATIVO
                                    </label>
                                </div>
                                <div class="form-check">
                                    <label for="" class="form-check-label">
                                        <input type="radio" name="teste" value="AGUARDANDO RESULTADO" class="form-check-input"> AGUARDANDO RESULTADO
                                    </label>
                                </div>
                            </div>
                            
                                <button type="submit" class="btn btn-primary">Gravar</button>
                                <a href="{{ route('home')}} "> <button type="button" class="btn btn-primary">Voltar</button></a>
                            
                        </form>
                

                    </section>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
