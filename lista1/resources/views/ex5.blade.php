@extends('layout')
@section('title', 'Área do Círculo')
@section('conteudo')
<div class="icon-circle"><i class="fas fa-circle"></i></div>
<h2 class="card-title">Área do Círculo</h2>
<form method="post" action="{{ route('ex5.calcular') }}">
    @csrf
    <div class="mb-3">
        <label for="raio" class="form-label"><i class="fas fa-dot-circle"></i> Raio do Círculo</label>
        <input type="number" id="raio" name="raio" class="form-control" step="0.01" min="0" required>
    </div>
    <div class="text-center">
        <button type="submit" class="btn btn-primary"><i class="fas fa-calculator"></i> Calcular Área</button>
    </div>
</form>
@isset($area)
<div class="result-card">
    <h4><i class="fas fa-circle-notch"></i> Resultado</h4>
    <p class="mb-2">Área do círculo:</p>
    <div class="result-value">{{ number_format($area, 2, ',', '.') }} m²</div>
</div>
@endisset
@endsection