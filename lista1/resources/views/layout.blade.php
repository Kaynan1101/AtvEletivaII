<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Calculadora PHP - @yield('title', 'Exercícios')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f5f5f5;
            background-image: url('/images/flacoroque.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            font-family: Arial, sans-serif;
            padding: 20px 0;
            position: relative;
        }

        body::before {
            content: '';
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(255, 255, 255, 0.30);
            z-index: -1;
        }

        .navbar {
            background-color: #3b7d0f;
            border-radius: 8px;
            padding: 15px 20px;
            margin-bottom: 30px;
        }

        .navbar-brand {
            color: white !important;
            font-weight: bold;
            font-size: 1.3rem;
        }

        .nav-link {
            color: #e8f5e9 !important;
            font-weight: 500;
        }

        .nav-link:hover {
            color: white !important;
        }

        .dropdown-menu {
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .dropdown-item:hover {
            background-color: #e8f5e9;
            color: #3b7d0f;
        }

        .main-card {
            background-color: white;
            border-radius: 8px;
            padding: 30px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
            max-width: 800px;
            margin: 0 auto;
        }

        .card-title {
            color: #2d5016;
            font-size: 1.8rem;
            font-weight: bold;
            margin-bottom: 25px;
            text-align: center;
            padding-bottom: 15px;
            border-bottom: 3px solid #4caf50;
        }

        .form-label {
            color: #555;
            font-weight: 600;
            margin-bottom: 8px;
        }

        .form-control {
            border: 2px solid #e0e0e0;
            border-radius: 5px;
            padding: 10px;
        }

        .form-control:focus {
            border-color: #4caf50;
            box-shadow: 0 0 0 0.2rem rgba(76, 175, 80, 0.25);
        }

        .btn-primary {
            background-color: #4caf50;
            border: none;
            border-radius: 5px;
            padding: 10px 30px;
            font-weight: 600;
        }

        .btn-primary:hover {
            background-color: #45a049;
        }

        .result-card {
            background-color: #e8f5e9;
            border-left: 4px solid #4caf50;
            border-radius: 5px;
            padding: 20px;
            margin-top: 25px;
        }

        .result-card h4 {
            color: #2d5016;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .result-value {
            font-size: 1.8rem;
            font-weight: bold;
            color: #2d5016;
        }

        .icon-circle {
            width: 60px;
            height: 60px;
            background-color: #4caf50;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.5rem;
            margin: 0 auto 20px;
        }

        @media (max-width: 768px) {
            .main-card {
                padding: 20px;
            }
            
            .card-title {
                font-size: 1.5rem;
            }
        }
    </style>
</head>
<body>
    @include('cabecalho')
    
    <div class="container">
        <div class="main-card">
            @yield('conteudo')
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>