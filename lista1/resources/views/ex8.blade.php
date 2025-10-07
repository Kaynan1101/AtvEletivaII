@extends('layout')
@section('title', 'Potenciação')
@section('conteudo')
<h2 class="card-title">Cálculo de Potência</h2>
<form method="post" action="{{ route('ex8.calcular') }}">
    @csrf
    <div class="row g-3">
        <div class="col-md-6">
            <label for="base" class="form-label"><i class="fas fa-cube"></i> Base</label>
            <input type="number" id="base" name="base" class="form-control" step="0.01" required>
        </div>
        <div class="col-md-6">
            <label for="expoente" class="form-label"><i class="fas fa-superscript"></i> Expoente</label>
            <input type="number" id="expoente" name="expoente" class="form-control" required>
        </div>
    </div>
    <div class="text-center mt-4">
        <button type="submit" class="btn btn-primary"><i class="fas fa-calculator"></i> Calcular Potência</button>
    </div>
</form>
@isset($resultado)
<div class="result-card">
    <h4><i class="fas fa-bolt"></i> Resultado</h4>
    <p class="mb-2">Resultado da potenciação:</p>
    <div class="result-value">{{ number_format($resultado, 2, ',', '.') }}</div>
</div>
@endisset
@endsection
