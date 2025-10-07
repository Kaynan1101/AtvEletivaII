@extends('layout')
@section('title', 'Metros → Centímetros')
@section('conteudo')
<h2 class="card-title">Metros → Centímetros</h2>
<form method="post" action="{{ route('ex9.converter') }}">
    @csrf
    <div class="mb-3">
        <label for="metros" class="form-label"><i class="fas fa-ruler-horizontal"></i> Valor em Metros</label>
        <input type="number" id="metros" name="metros" class="form-control" step="0.01" min="0" required>
    </div>
    <div class="text-center">
        <button type="submit" class="btn btn-primary"><i class="fas fa-exchange-alt"></i> Converter</button>
    </div>
</form>
@isset($centimetros)
<div class="result-card">
    <h4><i class="fas fa-ruler-combined"></i> Resultado</h4>
    <p class="mb-2">Valor em centímetros:</p>
    <div class="result-value">{{ number_format($centimetros, 2, ',', '.') }} cm</div>
</div>
@endisset
@endsection