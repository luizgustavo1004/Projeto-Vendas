<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


        <title>{{ $title ?? 'Lanchonete' }}</title>
    </head>
    <body>

      @if(auth()->check())

        <nav class="navbar navbar-expand-lg bg-dark">
            <div class="container-fluid">
              <a style="color: white" class="navbar-brand" href="#">Navbar</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                 
                  <li class="nav-item">
                    <a style="color: white" class="nav-link active" aria-current="page" href="/Dashboard/Admin">Home</a>
                  </li>

                  <li class="nav-item dropdown">
                    <a style="color: white" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Abas Administrador
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/Cadastro/Administrador">Cadastrar Administrador</a></li>
                      <li><a class="dropdown-item" href="/Administrador/Cadastro/Funcionarios">Cadastrar Funcionario</a></li>
                      <li><a class="dropdown-item" href="/administrador/clientes/cadastro">Cadastrar Clientes</a></li>

                    </ul>
                  </li>
                </ul>
              
              </div>
            </div>
          </nav>

         @endif


        {{ $slot }}













        @livewireStyles
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
        </script>
    </body>
</html>
