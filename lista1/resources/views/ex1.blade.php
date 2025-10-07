@extends('layout')

@section('title', 'Média de Notas')

@section('conteudo')

<h2 class="card-title">Cálculo de Média</h2>

<form method="post" action="{{ route('ex1.calcular') }}">
    @csrf
    <div class="row g-3">
        <div class="col-md-4">
            <label for="valor1" class="form-label">
                <i class="fas fa-1"></i> Nota 1
            </label>
            <input type="number" id="valor1" name="valor1" class="form-control" step="0.01" min="0" max="10" required>
        </div>
        <div class="col-md-4">
            <label for="valor2" class="form-label">
                <i class="fas fa-2"></i> Nota 2
            </label>
            <input type="number" id="valor2" name="valor2" class="form-control" step="0.01" min="0" max="10" required>
        </div>
        <div class="col-md-4">
            <label for="valor3" class="form-label">
                <i class="fas fa-3"></i> Nota 3
            </label>
            <input type="number" id="valor3" name="valor3" class="form-control" step="0.01" min="0" max="10" required>
        </div>
    </div>
    
    <div class="text-center mt-4">
        <button type="submit" class="btn btn-primary">
            <i class="fas fa-calculator"></i> Calcular Média
        </button>
    </div>
</form>

@isset($media)
<div class="result-card">
    <h4><i class="fas fa-trophy"></i> Resultado</h4>
    <p class="mb-2">A média das notas é:</p>
    <div class="result-value">{{ number_format($media, 2, ',', '.') }}</div>
    @if($media >= 7)
        <p class="text-success mt-3 mb-0"><i class="fas fa-check-circle"></i> Aprovado!</p>
    @elseif($media >= 5)
        <p class="text-warning mt-3 mb-0"><i class="fas fa-exclamation-triangle"></i> Recuperação</p>
    @else
        <p class="text-danger mt-3 mb-0"><i class="fas fa-times-circle"></i> Reprovado</p>
    @endif
</div>
@endisset

@if($errors->any())
<div class="alert alert-danger mt-3">
    <ul class="mb-0">
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
@endsection