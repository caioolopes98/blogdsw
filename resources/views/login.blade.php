
<!doctype html>
<html lang="pt-br">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- CSS's -->
    <link rel="stylesheet" href="style.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <!-- Scripts -->
    <script src="script.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <title>Login: Filmes/Séries</title>
</head>
<body>

    <!-- Menu -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">Blog de Filmes/Séries</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route ('cadastro') }}">Cadastro</a> <!-- SUBSTITUIR LINK PELA ROTA-->
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="login-form">
        <div class="cotainer">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Login</div>
                            <div class="card-body">
                                <form action="/validar" class="needs-validation" novalidate>

                                    <!-- Email-->
                                    <div class="form-group row">
                                        <label for="email" class="col-md-4 col-form-label text-md-right">E-mail</label>
                                        <div class="col-md-6">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                  <span class="input-group-text" id="inputGroupPrepend">@</span>
                                                </div>
                                                <!-- Input do Email -->
                                                <input type="text" id="email" class="form-control" name="email" required autofocus>
                                                <div class="invalid-feedback">
                                                    E-mail invalido.
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Senha-->
                                    <div class="form-group row">
                                        <label for="senha" class="col-md-4 col-form-label text-md-right">Senha</label>
                                        <div class="col-md-6">
                                            <!-- Input da Senha -->
                                            <input type="password" id="senha" class="form-control" name="senha" required>
                                            <div class="invalid-feedback">
                                                Senha inválida.
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Submit-->
                                    <div class="col-md-6 offset-md-4">
                                        <button id="entrar" name="entrar" type="submit" class="btn btn-primary">
                                            Entrar
                                        </button>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

<script>
    var msg = '{{Session::get('alert')}}';
    var exist = '{{Session::has('alert')}}';
    if(exist){
      alert(msg);
    }
  </script>


</html>