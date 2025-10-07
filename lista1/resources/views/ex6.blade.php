@extends('layout')
@section('title', 'Perímetro do Retângulo')
@section('conteudo')
<h2 class="card-title">Perímetro do Retângulo</h2>
<form method="post" action="{{ route('ex6.calcular') }}">
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
        <button type="submit" class="btn btn-primary"><i class="fas fa-calculator"></i> Calcular Perímetro</button>
    </div>
</form>
@isset($perimetro)
<div class="result-card">
    <h4><i class="fas fa-border-style"></i> Resultado</h4>
    <p class="mb-2">Perímetro do retângulo:</p>
    <div class="result-value">{{ number_format($perimetro, 2, ',', '.') }} m</div>
</div>
@endisset
@endsection