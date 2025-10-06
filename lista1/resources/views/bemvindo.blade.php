@extends('layout')

@section('title', 'Bem-vindo')

@section('conteudo')
<div class="text-center">
    <div class="icon-circle" style="width: 80px; height: 80px; font-size: 2rem; margin-bottom: 20px;">
        &#128200;
    </div>
    
    <h1 class="card-title">Calculadora PHP</h1>
    
    <p style="color: #666; font-size: 1.1rem; margin-bottom: 30px;">
        Sistema de exercícios práticos de PHP e Laravel
    </p>
    
    <div class="row g-3 mt-4">
        <div class="col-md-4">
            <div style="background-color: #f9f9f9; padding: 25px; border-radius: 8px; border: 1px solid #e0e0e0;">
                <div style="font-size: 2.5rem; color: #4caf50; margin-bottom: 10px;">📊</div>
                <h5 style="color: #2d5016; font-weight: bold;">Exercícios 1-5</h5>
                <p style="color: #666; font-size: 0.95rem;">Médias e conversões</p>
            </div>
        </div>
        <div class="col-md-4">
            <div style="background-color: #f9f9f9; padding: 25px; border-radius: 8px; border: 1px solid #e0e0e0;">
                <div style="font-size: 2.5rem; color: #4caf50; margin-bottom: 10px;">📐</div>
                <h5 style="color: #2d5016; font-weight: bold;">Exercícios 6-10</h5>
                <p style="color: #666; font-size: 0.95rem;">Geometria e medidas</p>
            </div>
        </div>
        <div class="col-md-4">
            <div style="background-color: #f9f9f9; padding: 25px; border-radius: 8px; border: 1px solid #e0e0e0;">
                <div style="font-size: 2.5rem; color: #4caf50; margin-bottom: 10px;">💰</div>
                <h5 style="color: #2d5016; font-weight: bold;">Exercícios 11-15</h5>
                <p style="color: #666; font-size: 0.95rem;">Finanças e tempo</p>
            </div>
        </div>
    </div>
    
    <div class="mt-4">
        <a href="{{ route('ex1') }}" class="btn btn-primary">Começar Exercícios</a>
    </div>
</div>
@endsection