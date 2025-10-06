@extends('layout')
@section('title', 'Conversão de Tempo')
@section('conteudo')
<div class="icon-circle"><i class="fas fa-clock"></i></div>
<h2 class="card-title">Conversão de Dias</h2>
<form method="post" action="{{ route('ex15.converter') }}">
    @csrf
    <div class="mb-3">
        <label for="dias" class="form-label"><i class="fas fa-calendar-day"></i> Número de Dias</label>
        <input type="number" id="dias" name="dias" class="form-control" min="0" required>
    </div>
    <div class="text-center">
        <button type="submit" class="btn btn-primary"><i class="fas fa-exchange-alt"></i> Converter</button>
    </div>
</form>
@isset($horas)
<div class="result-card">
    <h4><i class="fas fa-hourglass-half"></i> Resultado</h4>
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