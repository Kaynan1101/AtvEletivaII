<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/bemvindo', function () {
    return view('bemvindo');
})->name('bemvindo');

Route::get('/ex1', function () {
    return view('ex1');
})->name('ex1');

Route::post('/ex1', function(Request $request) {
    $request->validate([
        'valor1' => 'required|numeric',
        'valor2' => 'required|numeric',
        'valor3' => 'required|numeric',
    ]);

    $valores = [
        $request->input('valor1'),
        $request->input('valor2'),
        $request->input('valor3')
    ];
    
    $media = array_sum($valores) / count($valores);
    
    return view('ex1', compact('media'));
})->name('ex1.calcular');

Route::get('/ex2', function () {
    return view('ex2');
})->name('ex2');

Route::post('/ex2', function(Request $request) {
    $request->validate(['celsius' => 'required|numeric']);
    
    $celsius = $request->input('celsius');
    $fahrenheit = ($celsius * 1.8) + 32;
    
    return view('ex2', ['temp' => $fahrenheit]);
})->name('ex2.converter');

Route::get('/ex3', function () {
    return view('ex3');
})->name('ex3');

Route::post('/ex3', function(Request $request) {
    $request->validate(['temp' => 'required|numeric']);
    
    $fahrenheit = $request->input('temp');
    $celsius = ($fahrenheit - 32) / 1.8;
    
    return view('ex3', compact('celsius'));
})->name('ex3.converter');

Route::get('/ex4', function () {
    return view('ex4');
})->name('ex4');

Route::post('/ex4', function(Request $request) {
    $request->validate([
        'comp' => 'required|numeric|min:0',
        'larg' => 'required|numeric|min:0',
    ]);
    
    $comp = $request->input('comp');
    $larg = $request->input('larg');
    $area = $comp * $larg;
    
    return view('ex4', compact('area'));
})->name('ex4.calcular');

Route::get('/ex5', function () {
    return view('ex5');
})->name('ex5');

Route::post('/ex5', function(Request $request) {
    $request->validate(['raio' => 'required|numeric|min:0']);
    
    $raio = $request->input('raio');
    $area = pi() * pow($raio, 2);
    
    return view('ex5', compact('area'));
})->name('ex5.calcular');

Route::get('/ex6', function () {
    return view('ex6');
})->name('ex6');

Route::post('/ex6', function(Request $request) {
    $request->validate([
        'comp' => 'required|numeric|min:0',
        'larg' => 'required|numeric|min:0',
    ]);
    
    $comp = $request->input('comp');
    $larg = $request->input('larg');
    $perimetro = 2 * ($comp + $larg);
    
    return view('ex6', compact('perimetro'));
})->name('ex6.calcular');

Route::get('/ex7', function () {
    return view('ex7');
})->name('ex7');

Route::post('/ex7', function(Request $request) {
    $request->validate(['raio' => 'required|numeric|min:0']);
    
    $raio = $request->input('raio');
    $perimetro = 2 * pi() * $raio;
    
    return view('ex7', compact('perimetro'));
})->name('ex7.calcular');

Route::get('/ex8', function () {
    return view('ex8');
})->name('ex8');

Route::post('/ex8', function(Request $request) {
    $request->validate([
        'base' => 'required|numeric',
        'expoente' => 'required|numeric',
    ]);
    
    $base = $request->input('base');
    $expoente = $request->input('expoente');
    $resultado = pow($base, $expoente);
    
    return view('ex8', compact('resultado'));
})->name('ex8.calcular');

Route::get('/ex9', function () {
    return view('ex9');
})->name('ex9');

Route::post('/ex9', function(Request $request) {
    $request->validate(['metros' => 'required|numeric|min:0']);
    
    $metros = $request->input('metros');
    $centimetros = $metros * 100;
    
    return view('ex9', compact('centimetros'));
})->name('ex9.converter');

Route::get('/ex10', function () {
    return view('ex10');
})->name('ex10');

Route::post('/ex10', function(Request $request) {
    $request->validate(['km' => 'required|numeric|min:0']);
    
    $km = $request->input('km');
    $milhas = $km * 0.621371;
    
    return view('ex10', compact('milhas'));
})->name('ex10.converter');

Route::get('/ex11', function () {
    return view('ex11');
})->name('ex11');

Route::post('/ex11', function(Request $request) {
    $request->validate([
        'altura' => 'required|numeric|min:0',
        'peso' => 'required|numeric|min:0',
    ]);
    
    $altura = $request->input('altura');
    $peso = $request->input('peso');
    $imc = $peso / pow($altura, 2);
    
    return view('ex11', compact('imc'));
})->name('ex11.calcular');

Route::get('/ex12', function () {
    return view('ex12');
})->name('ex12');

Route::post('/ex12', function(Request $request) {
    $request->validate([
        'preco' => 'required|numeric|min:0',
        'desconto' => 'required|numeric|min:0|max:100',
    ]);
    
    $preco = $request->input('preco');
    $desconto = $request->input('desconto');
    $valorDesconto = $preco * ($desconto / 100);
    $precoFinal = $preco - $valorDesconto;
    
    return view('ex12', [
        'resultado' => $precoFinal,
        'valorDesconto' => $valorDesconto
    ]);
})->name('ex12.calcular');

Route::get('/ex13', function () {
    return view('ex13');
})->name('ex13');

Route::post('/ex13', function(Request $request) {
    $request->validate([
        'capital' => 'required|numeric|min:0',
        'taxa' => 'required|numeric|min:0',
        'periodo' => 'required|integer|min:0',
    ]);
    
    $capital = $request->input('capital');
    $taxa = $request->input('taxa');
    $periodo = $request->input('periodo');
    $juros = $capital * ($taxa / 100) * $periodo;
    
    return view('ex13', compact('juros'));
})->name('ex13.calcular');

Route::get('/ex14', function () {
    return view('ex14');
})->name('ex14');

Route::post('/ex14', function(Request $request) {
    $request->validate([
        'capital' => 'required|numeric|min:0',
        'taxa' => 'required|numeric|min:0',
        'periodo' => 'required|integer|min:0',
    ]);
    
    $capital = $request->input('capital');
    $taxa = $request->input('taxa');
    $periodo = $request->input('periodo');
    $montante = $capital * pow(1 + ($taxa / 100), $periodo);
    
    return view('ex14', compact('montante'));
})->name('ex14.calcular');

Route::get('/ex15', function () {
    return view('ex15');
})->name('ex15');

Route::post('/ex15', function(Request $request) {
    $request->validate(['dias' => 'required|integer|min:0']);
    
    $dias = $request->input('dias');
    $horas = $dias * 24;
    $minutos = $horas * 60;
    $segundos = $minutos * 60;
    
    return view('ex15', compact('horas', 'minutos', 'segundos'));
})->name('ex15.converter');

Route::get('/ex16', function () {
    return view('ex16');
})->name('ex16');

Route::post('/ex16', function(Request $request) {
    $request->validate([
        'preco' => 'required|numeric|min:0',
        'percentual' => 'required|numeric|min:0|max:100',
    ]);
    
    $preco = $request->input('preco');
    $percentual = $request->input('percentual');
    $desconto = $preco * ($percentual / 100);
    $precoFinal = $preco - $desconto;
    
    return view('ex16', compact('precoFinal', 'desconto'));
})->name('ex16.calcular');

Route::get('/ex17', function () {
    return view('ex17');
})->name('ex17');

Route::post('/ex17', function(Request $request) {
    $request->validate([
        'capital' => 'required|numeric|min:0',
        'taxa' => 'required|numeric|min:0',
        'periodo' => 'required|integer|min:0',
    ]);
    
    $capital = $request->input('capital');
    $taxa = $request->input('taxa');
    $periodo = $request->input('periodo');
    $juros = $capital * ($taxa / 100) * $periodo;
    
    return view('ex17', compact('juros'));
})->name('ex17.calcular');

Route::get('/ex18', function () {
    return view('ex18');
})->name('ex18');

Route::post('/ex18', function(Request $request) {
    $request->validate([
        'capital' => 'required|numeric|min:0',
        'taxa' => 'required|numeric|min:0',
        'periodo' => 'required|integer|min:0',
    ]);
    
    $capital = $request->input('capital');
    $taxa = $request->input('taxa');
    $periodo = $request->input('periodo');
    $montante = $capital * pow(1 + ($taxa / 100), $periodo);
    
    return view('ex18', compact('montante'));
})->name('ex18.calcular');

Route::get('/ex19', function () {
    return view('ex19');
})->name('ex19');

Route::post('/ex19', function(Request $request) {
    $request->validate(['dias' => 'required|integer|min:0']);
    
    $dias = $request->input('dias');
    $horas = $dias * 24;
    $minutos = $horas * 60;
    $segundos = $minutos * 60;
    
    return view('ex19', compact('horas', 'minutos', 'segundos'));
})->name('ex19.converter');

Route::get('/ex20', function () {
    return view('ex20');
})->name('ex20');

Route::post('/ex20', function(Request $request) {
    $request->validate([
        'distancia' => 'required|numeric|min:0',
        'tempo' => 'required|numeric|min:0.01',
    ]);
    
    $distancia = $request->input('distancia');
    $tempo = $request->input('tempo');
    $velocidade = $distancia / $tempo;
    
    return view('ex20', compact('velocidade'));
})->name('ex20.calcular');