@extends('layout')
@section('title', 'Preço com Desconto')
@section('conteudo')
<h2 class="card-title">Preço com Desconto</h2>
<form method="post" action="{{ route('ex16.calcular') }}">
    @csrf
    <div class="row g-3">
        <div class="col-md-6">
            <label for="preco" class="form-label">Preço Original (R$)</label>
            <input type="number" id="preco" name="preco" class="form-control" step="0.01" min="0" required>
        </div>
        <div class="col-md-6">
            <label for="percentual" class="form-label">Percentual de Desconto (%)</label>
            <input type="number" id="percentual" name="percentual" class="form-control" step="0.01" min="0" max="100" required>
        </div>
    </div>
    <div class="text-center mt-4">
        <button type="submit" class="btn btn-primary">Calcular</button>
    </div>
</form>
@isset($precoFinal)
<div class="result-card">
    <h4>Resultado</h4>
    <p class="mb-2">Preço com desconto:</p>
    <div class="result-value">R$ {{ number_format($precoFinal, 2, ',', '.') }}</div>
    <p class="text-success mt-3 mb-0">Economia: R$ {{ number_format($desconto, 2, ',', '.') }}</p>
</div>
@endisset
@endsection