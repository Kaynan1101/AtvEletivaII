@extends('layout')
@section('title', 'Km → Milhas')
@section('conteudo')
<h2 class="card-title">Quilômetros → Milhas</h2>
<form method="post" action="{{ route('ex10.converter') }}">
    @csrf
    <div class="mb-3">
        <label for="km" class="form-label"><i class="fas fa-map-signs"></i> Valor em Quilômetros</label>
        <input type="number" id="km" name="km" class="form-control" step="0.01" min="0" required>
    </div>
    <div class="text-center">
        <button type="submit" class="btn btn-primary"><i class="fas fa-exchange-alt"></i> Converter</button>
    </div>
</form>
@isset($milhas)
<div class="result-card">
    <h4><i class="fas fa-route"></i> Resultado</h4>
    <p class="mb-2">Valor em milhas:</p>
    <div class="result-value">{{ number_format($milhas, 2, ',', '.') }} mi</div>
</div>
@endisset
@endsection