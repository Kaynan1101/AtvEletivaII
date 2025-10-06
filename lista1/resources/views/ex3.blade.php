@extends('layout')
@section('title', 'Fahrenheit → Celsius')
@section('conteudo')
<div class="icon-circle"><i class="fas fa-temperature-low"></i></div>
<h2 class="card-title">Fahrenheit → Celsius</h2>
<form method="post" action="{{ route('ex3.converter') }}">
    @csrf
    <div class="mb-3">
        <label for="temp" class="form-label"><i class="fas fa-thermometer-half"></i> Temperatura em Fahrenheit</label>
        <input type="number" id="temp" name="temp" class="form-control" step="0.01" required>
    </div>
    <div class="text-center">
        <button type="submit" class="btn btn-primary"><i class="fas fa-exchange-alt"></i> Converter</button>
    </div>
</form>
@isset($celsius)
<div class="result-card">
    <h4><i class="fas fa-snowflake"></i> Resultado</h4>
    <p class="mb-2">Temperatura em Celsius:</p>
    <div class="result-value">{{ number_format($celsius, 2, ',', '.') }}°C</div>
</div>
@endisset
@endsection