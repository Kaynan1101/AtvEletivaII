<div class="container">
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('bemvindo') }}">Calculadora PHP</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" style="background-color: white;">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarContent">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                            Exercícios 1-5
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('ex1') }}">Ex 1 - Média</a></li>
                            <li><a class="dropdown-item" href="{{ route('ex2') }}">Ex 2 - C → F</a></li>
                            <li><a class="dropdown-item" href="{{ route('ex3') }}">Ex 3 - F → C</a></li>
                            <li><a class="dropdown-item" href="{{ route('ex4') }}">Ex 4 - Área Retângulo</a></li>
                            <li><a class="dropdown-item" href="{{ route('ex5') }}">Ex 5 - Área Círculo</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                            Exercícios 6-10
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('ex6') }}">Ex 6 - Perímetro Retângulo</a></li>
                            <li><a class="dropdown-item" href="{{ route('ex7') }}">Ex 7 - Perímetro Círculo</a></li>
                            <li><a class="dropdown-item" href="{{ route('ex8') }}">Ex 8 - Potenciação</a></li>
                            <li><a class="dropdown-item" href="{{ route('ex9') }}">Ex 9 - M → CM</a></li>
                            <li><a class="dropdown-item" href="{{ route('ex10') }}">Ex 10 - KM → MI</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                            Exercícios 11-15
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('ex11') }}">Ex 11 - IMC</a></li>
                            <li><a class="dropdown-item" href="{{ route('ex12') }}">Ex 12 - Desconto</a></li>
                            <li><a class="dropdown-item" href="{{ route('ex13') }}">Ex 13 - Juros Simples</a></li>
                            <li><a class="dropdown-item" href="{{ route('ex14') }}">Ex 14 - Juros Compostos</a></li>
                            <li><a class="dropdown-item" href="{{ route('ex15') }}">Ex 15 - Conversão Tempo</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>