@extends('layout')
@section('title', 'Cálculo de Desconto')
@section('conteudo')
<h2 class="card-title">Cálculo de Desconto</h2>
<form method="post" action="{{ route('ex12.calcular') }}">
    @csrf
    <div class="row g-3">
        <div class="col-md-6">
            <label for="preco" class="form-label"><i class="fas fa-dollar-sign"></i> Preço Original (R$)</label>
            <input type="number" id="preco" name="preco" class="form-control" step="0.01" min="0" required>
        </div>
        <div class="col-md-6">
            <label for="desconto" class="form-label"><i class="fas fa-percentage"></i> Desconto (%)</label>
            <input type="number" id="desconto" name="desconto" class="form-control" step="0.01" min="0" max="100" required>
        </div>
    </div>
    <div class="text-center mt-4">
        <button type="submit" class="btn btn-primary"><i class="fas fa-calculator"></i> Calcular</button>
    </div>
</form>
@isset($resultado)
<div class="result-card">
    <h4><i class="fas fa-shopping-cart"></i> Resultado</h4>
    <p class="mb-2">Preço com desconto:</p>
    <div class="result-value">R$ {{ number_format($resultado, 2, ',', '.') }}</div>
    @isset($valorDesconto)
    <p class="text-success mt-3 mb-0"><i class="fas fa-tag"></i> Você economizou: R$ {{ number_format($valorDesconto, 2, ',', '.') }}</p>
    @endisset
</div>