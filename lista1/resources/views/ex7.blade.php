@extends('layout')
@section('title', 'Perímetro do Círculo')
@section('conteudo')
<div class="icon-circle"><i class="fas fa-circle-notch"></i></div>
<h2 class="card-title">Perímetro do Círculo</h2>
<form method="post" action="{{ route('ex7.calcular') }}">
    @csrf
    <div class="mb-3">
        <label for="raio" class="form-label"><i class="fas fa-dot-circle"></i> Raio do Círculo</label>
        <input type="number" id="raio" name="raio" class="form-control" step="0.01" min="0" required>
    </div>
    <div class="text-center">
        <button type="submit" class="btn btn-primary"><i class="fas fa-calculator"></i> Calcular Perímetro</button>
    </div>
</form>
@isset($perimetro)
<div class="result-card">
    <h4><i class="fas fa-circle"></i> Resultado</h4>
    <p class="mb-2">Perímetro (circunferência) do círculo:</p>
    <div class="result-value">{{ number_format($perimetro, 2, ',', '.') }} m</div>
</div>
@endisset
@endsection