@extends('layout')
@section('title', 'Juros Compostos - Montante')
@section('conteudo')
<h2 class="card-title">Montante com Juros Compostos</h2>
<form method="post" action="{{ route('ex18.calcular') }}">
    @csrf
    <div class="row g-3">
        <div class="col-md-4">
            <label for="capital" class="form-label">Capital (R$)</label>
            <input type="number" id="capital" name="capital" class="form-control" step="0.01" min="0" required>
        </div>
        <div class="col-md-4">
            <label for="taxa" class="form-label">Taxa (%)</label>
            <input type="number" id="taxa" name="taxa" class="form-control" step="0.01" min="0" required>
        </div>
        <div class="col-md-4">
            <label for="periodo" class="form-label">Período (meses)</label>
            <input type="number" id="periodo" name="periodo" class="form-control" min="0" required>
        </div>
    </div>
    <div class="text-center mt-4">
        <button type="submit" class="btn btn-primary">Calcular Montante</button>
    </div>
</form>
@isset($montante)
<div class="result-card">
    <h4>Resultado</h4>
    <p class="mb-2">Montante final:</p>
    <div class="result-value">R$ {{ number_format($montante, 2, ',', '.') }}</div>
</div>
@endisset
@endsection