@extends('layout')
@section('title', 'Juros Simples')
@section('conteudo')
<div class="icon-circle"><i class="fas fa-percentage"></i></div>
<h2 class="card-title">Cálculo de Juros Simples</h2>
<form method="post" action="{{ route('ex13.calcular') }}">
    @csrf
    <div class="row g-3">
        <div class="col-md-4">
            <label for="capital" class="form-label"><i class="fas fa-money-bill-wave"></i> Capital (R$)</label>
            <input type="number" id="capital" name="capital" class="form-control" step="0.01" min="0" required>
        </div>
        <div class="col-md-4">
            <label for="taxa" class="form-label"><i class="fas fa-percent"></i> Taxa (%)</label>
            <input type="number" id="taxa" name="taxa" class="form-control" step="0.01" min="0" required>
        </div>
        <div class="col-md-4">
            <label for="periodo" class="form-label"><i class="fas fa-calendar-alt"></i> Período (meses)</label>
            <input type="number" id="periodo" name="periodo" class="form-control" min="0" required>
        </div>
    </div>
    <div class="text-center mt-4">
        <button type="submit" class="btn btn-primary"><i class="fas fa-calculator"></i> Calcular Juros</button>
    </div>
</form>
@isset($juros)
<div class="result-card">
    <h4><i class="fas fa-hand-holding-usd"></i> Resultado</h4>
    <p class="mb-2">Juros a pagar:</p>
    <div class="result-value">R$ {{ number_format($juros, 2, ',', '.') }}</div>
</div>
@endisset
@endsection