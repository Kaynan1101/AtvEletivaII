@extends('layout')
@section('title', 'Velocidade Média')
@section('conteudo')
<h2 class="card-title">Velocidade Média</h2>
<form method="post" action="{{ route('ex20.calcular') }}">
    @csrf
    <div class="row g-3">
        <div class="col-md-6">
            <label for="distancia" class="form-label">Distância (km)</label>
            <input type="number" id="distancia" name="distancia" class="form-control" step="0.01" min="0" required>
        </div>
        <div class="col-md-6">
            <label for="tempo" class="form-label">Tempo (horas)</label>
            <input type="number" id="tempo" name="tempo" class="form-control" step="0.01" min="0.01" required>
        </div>
    </div>
    <div class="text-center mt-4">
        <button type="submit" class="btn btn-primary">Calcular Velocidade</button>
    </div>
</form>
@isset($velocidade)
<div class="result-card">
    <h4>Resultado</h4>
    <p class="mb-2">Velocidade Média:</p>
    <div class="result-value">{{ number_format($velocidade, 2, ',', '.') }} km/h</div>
</div>
@endisset
@endsection