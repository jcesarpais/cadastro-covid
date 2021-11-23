@extends('layouts.app')

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
            
                        <form id="formulario" action="validacadastro.php" method="POST">
                            <fieldset>
                                <div class="mb-3">
                                    <label for="nome" class="form-label">Nome Completo</label>
                                    <input type="text" id="nome" name="nome" placeholder="Digite o nome do Paciênte...">
                                </div>
                                <div class="mb-3">
                                    <label>Sexo</label>
                                    <label for="" class="form-label">
                                        <input type="radio" name="genero" value="M"> Masculino
                                    </label>
                                    <label for="" class="form-label">
                                        <input type="radio" name="genero" value="F"> Feminino
                                    </label>
                                </div>
                                <div class="mb-3">
                                    <label for="sus" class="form-label">Nº CARTÃO SUS</label>
                                    <input type="text" id="sus" class="campo" name="sus" placeholder="123 4567 8910 1112">
                                </div>
                                <div class="mb-3">
                                    <label for="rg" class="form-label">RG</label>
                                    <input type="text" id="rg" class="campo" name="rg" placeholder="11.111.111-1">
                                </div>
                                <div class="mb-3">
                                    <label for="cpf" class="form-label">CPF</label>
                                    <input type="text" id="cpf" class="campo" name="cpf" placeholder="111.111.111-11">
                                </div>                  
                                <div class="mb-3">
                                    <label for="cep" class="form-label">CEP</label>
                                    <input type="text" id="cep" class="campo" name="cep" placeholder="11.111-111">
                                </div>
                                <div class="mb-3">
                                    <label for="endereco" class="form-label">Endereço</label>
                                    <input type="text" id="endereco" class="campo" name="endereco" placeholder="Digite o endereço...">
                                </div>
                                <div class="mb-3">                    
                                    <label for="cidade" class="form-label">Cidade</label>
                                    <input type="text" id="cidade" class="campo" name="cidade" placeholder="Digite a cidade...">
                                </div>
                                <div class="mb-3">
                                    <label for="estado" class="form-label">Estado</label>
                                    <input type="text" id="estado" class="campo" name="estado" placeholder="Digite o estado que reside...">
                                </div>
                                <div class="form-check">
                                    <label class="form-label">TESTE COVID</label>
                                    <label for="" class="form-check-label">
                                    <input type="radio" name="teste" value="POSITIVO" class="form-check-input"> POSITIVO
                                    </label>
                                    <label for="" class="form-check-label">
                                    <input type="radio" name="teste" value="NEGATIVO" class="form-check-input"> NEGATIVO
                                    </label>
                                    <label for="" class="form-check-label">
                                    <input type="radio" name="teste" value="AGUARDANDO RESULTADO" class="form-check-input"> AGUARDANDO RESULTADO
                                    </label>
                                </div>
                                
                                    <a href="#"> <button type="button" class="btn btn-primary">Gravar</button></a>
                                    <a href="../home"> <button type="button" class="btn btn-primary">Voltar</button></a>

                                
                            </fieldset>
                        </form>
                

                    </section>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
