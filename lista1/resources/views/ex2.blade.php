@extends('layout')
@section('title', 'Celsius → Fahrenheit')
@section('conteudo')
<div class="icon-circle"><i class="fas fa-temperature-high"></i></div>
<h2 class="card-title">Celsius → Fahrenheit</h2>
<form method="post" action="{{ route('ex2.converter') }}">
    @csrf
    <div class="mb-3">
        <label for="celsius" class="form-label"><i class="fas fa-thermometer-half"></i> Temperatura em Celsius</label>
        <input type="number" id="celsius" name="celsius" class="form-control" step="0.01" required>
    </div>
    <div class="text-center">
        <button type="submit" class="btn btn-primary"><i class="fas fa-exchange-alt"></i> Converter</button>
    </div>
</form>
@isset($temp)
<div class="result-card">
    <h4><i class="fas fa-fire"></i> Resultado</h4>
    <p class="mb-2">Temperatura em Fahrenheit:</p>
    <div class="result-value">{{ number_format($temp, 2, ',', '.') }}°F</div>
</div>
@endisset
@endsection