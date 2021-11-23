@extends('layouts.app')

@section('title', 'Resultado Busca')

@section('content')

@foreach($cadastro as $cadastro)

<p>{{ $cadastro->title}} -- {{ $cadastro->description }}</p>

@endforeach

@endsection