
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

    <title>Novo Post: Filmes/Séries</title>
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
                        <a class="nav-link" href="inicio.html">Início</a> <!-- SUBSTITUIR LINK PELA ROTA-->
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Novo Post</a> <!-- SUBSTITUIR LINK PELA ROTA-->
                    </li>
                    <li class="nav-item">
                        <a style="color: #CD5C5C" class="nav-link" href="login.html">Sair</a> <!-- DESLOGA USUÁRIO E VOLTA PARA A ROTA DE LOGIN-->
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
                        <div class="card-header">Novo Post</div>
                            <div class="card-body">
                                <form action="{{ route ('novoPost.create', ['id' => $id]) }}" class="needs-validation" novalidate>

                                    <!-- Titulo -->
                                    <div class="form-group row">
                                        <label for="email" class="col-md-4 col-form-label text-md-right">Titulo</label>
                                        <div class="col-md-6">
                                            <div class="input-group">
                                                <!-- Input do Titulo do Post -->
                                                <input type="text" id="titulo" class="form-control" name="titulo" required autofocus>
                                                <div class="invalid-feedback">
                                                    Escreva o titulo da postagem.
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Corpo -->
                                    <div class="form-group row">
                                        <label for="senha" class="col-md-4 col-form-label text-md-right">Corpo</label>
                                        <div class="col-md-6">
                                            <!-- Input do Post -->
                                            <textarea name="texto" maxlength="500" class="form-control" rows="3"></textarea>
                                        </div>
                                    </div>

                                    <!-- Submit-->
                                    <div class="col-md-6 offset-md-4">
                                        <button id="postar" name="postar" type="submit" class="btn btn-primary">
                                            Postar
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
</html>