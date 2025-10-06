@extends('layout')
@section('title', 'Cálculo IMC')
@section('conteudo')
<div class="icon-circle"><i class="fas fa-weight"></i></div>
<h2 class="card-title">Cálculo do IMC</h2>
<form method="post" action="{{ route('ex11.calcular') }}">
    @csrf
    <div class="row g-3">
        <div class="col-md-6">
            <label for="altura" class="form-label"><i class="fas fa-ruler-vertical"></i> Altura (m)</label>
            <input type="number" id="altura" name="altura" class="form-control" step="0.01" min="0" placeholder="Ex: 1.75" required>
        </div>
        <div class="col-md-6">
            <label for="peso" class="form-label"><i class="fas fa-weight-hanging"></i> Peso (kg)</label>
            <input type="number" id="peso" name="peso" class="form-control" step="0.01" min="0" placeholder="Ex: 70" required>
        </div>
    </div>
    <div class="text-center mt-4">
        <button type="submit" class="btn btn-primary"><i class="fas fa-calculator"></i> Calcular IMC</button>
    </div>
</form>
@isset($imc)
<div class="result-card">
    <h4><i class="fas fa-heartbeat"></i> Resultado</h4>
    <p class="mb-2">Seu IMC é:</p>
    <div class="result-value">{{ number_format($imc, 2, ',', '.') }}</div>
    @if($imc < 18.5)
        <p class="text-warning mt-3 mb-0"><i class="fas fa-info-circle"></i> Abaixo do peso</p>
    @elseif($imc < 25)
        <p class="text-success mt-3 mb-0"><i class="fas fa-check-circle"></i> Peso normal</p>
    @elseif($imc < 30)
        <p class="text-warning mt-3 mb-0"><i class="fas fa-exclamation-triangle"></i> Sobrepeso</p>
    @else
        <p class="text-danger mt-3 mb-0"><i class="fas fa-times-circle"></i> Obesidade</p>
    @endif
</div>
@endisset
@endsection