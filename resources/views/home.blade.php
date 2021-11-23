@extends('layouts.app')

@section('title', 'Cadastro Covid19')

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

                    <section class="segura">

                        <div class="botoes">
                            <a href="cadastro/cadastrar"> <button type="button" class="btn btn-primary">Cadastrar</button></a>
                            
                            
                            <a href="cadastro/buscar"><button type="button" class="btn btn-success">Buscar</button></a>
                            
                        </div>

                    </section>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
