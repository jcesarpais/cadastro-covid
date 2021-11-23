@extends('layouts.app')

@section('title', 'Buscar Pacientes')

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

                    <header>
                        <h1>Buscar Paciente</h1>
                    </header>
                    <section class="area-form">
                        <form name="pesquisa" action="php/pesquisa.php" method="POST">
                            <fieldset>
                                <input type="hidden" name="IDpaciente" >
                                <div class="campo">
                                    <label>SUS</label>
                                    <input type="text" id="buscar" name="buscar" placeholder="Digite o número do cartão SUS..." >
                                </div>
                                <div class="botoes">
                                    <button type="submit" class="btn btn-secondary" value="Buscar">Buscar</button>
                                    <a href="../home"><button type="button" class="btn btn-primary">Voltar</button></a>
                                </div>
                            </fieldset>
                        </form>
                    </section>
                </div>
            </div>
        </div>
    </div>
</div>

    

@endsection





