@extends('layout')
@section('title', 'Conversão de Dias')
@section('conteudo')
<h2 class="card-title">Conversão de Dias</h2>
<form method="post" action="{{ route('ex19.converter') }}">
    @csrf
    <div class="mb-3">
        <label for="dias" class="form-label">Número de Dias</label>
        <input type="number" id="dias" name="dias" class="form-control" min="0" required>
    </div>
    <div class="text-center">
        <button type="submit" class="btn btn-primary">Converter</button>
    </div>
</form>
@isset($horas)
<div class="result-card">
    <h4>Resultado</h4>
    <div class="row text-center mt-3">
        <div class="col-md-4 mb-3">
            <p class="text-muted mb-1">Horas</p>
            <div class="result-value" style="font-size: 1.5rem;">{{ number_format($horas, 0, ',', '.') }}</div>
        </div>
        <div class="col-md-4 mb-3">
            <p class="text-muted mb-1">Minutos</p>
            <div class="result-value" style="font-size: 1.5rem;">{{ number_format($minutos, 0, ',', '.') }}</div>
        </div>
        <div class="col-md-4 mb-3">
            <p class="text-muted mb-1">Segundos</p>
            <div class="result-value" style="font-size: 1.5rem;">{{ number_format($segundos, 0, ',', '.') }}</div>
        </div>
    </div>
</div>
@endisset
@endsection