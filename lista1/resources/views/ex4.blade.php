@extends('layout')
@section('title', 'Área do Retângulo')
@section('conteudo')
<h2 class="card-title">Área do Retângulo</h2>
<form method="post" action="{{ route('ex4.calcular') }}">
    @csrf
    <div class="row g-3">
        <div class="col-md-6">
            <label for="comp" class="form-label"><i class="fas fa-arrows-alt-h"></i> Comprimento</label>
            <input type="number" id="comp" name="comp" class="form-control" step="0.01" min="0" required>
        </div>
        <div class="col-md-6">
            <label for="larg" class="form-label"><i class="fas fa-arrows-alt-v"></i> Largura</label>
            <input type="number" id="larg" name="larg" class="form-control" step="0.01" min="0" required>
        </div>
    </div>
    <div class="text-center mt-4">
        <button type="submit" class="btn btn-primary"><i class="fas fa-calculator"></i> Calcular Área</button>
    </div>
</form>
@isset($area)
<div class="result-card">
    <h4><i class="fas fa-ruler-combined"></i> Resultado</h4>
    <p class="mb-2">Área do retângulo:</p>
    <div class="result-value">{{ number_format($area, 2, ',', '.') }} m²</div>
</div>
@endisset
@endsection