@extends('layout')

@section('title', 'Bem-vindo')

@section('conteudo')
<div class="text-center">
    
    <h1 class="card-title">Calculadora PHP</h1>
    
    <p style="color: #666; font-size: 1.1rem; margin-bottom: 30px;">
        Sistema de exercícios práticos de PHP e Laravel
    </p>
    
    <div class="mt-4">
        <a href="{{ route('ex1') }}" class="btn btn-primary">Começar Exercícios</a>
    </div>
</div>
@endsection