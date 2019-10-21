<!DOCTYPE html>
<html lang="pt-br">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
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

    <script type="text/javascript">
        //Função verifica antes da página ser carregada, se usuário é Admin ou não para poder aparecer o botão "Novo Post"
        window.onload = function() {
          var x = document.getElementById("novoPost");
          isAdmin = true;

          if (!isAdmin) {
            x.style.display = "none";
            x.style.visibility = 'hidden';
          }           
        }
    </script>

    <title>início: Filmes/Séries</title>
</head>

<body>

  <!-- Menu -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">Blog de Filmes/Séries - Bem vindo, {{$usuario->nome}}</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route ('inicio', ['id'=>$id]) }}">Início</a> <!-- SUBSTITUIR LINK PELA ROTA-->
                    </li>
                    <li id="novoPost" class="nav-item">
                        <a class="nav-link" href="{{ route('novoPost', ['id' => $id])}}">Novo Post</a> <!-- SUBSTITUIR LINK PELA ROTA-->
                    </li>
                    <li class="nav-item">
                        <a style="color: #CD5C5C" class="nav-link" href="/">Sair</a> <!-- DESLOGA USUÁRIO E VOLTA PARA A ROTA DE LOGIN-->
                    </li>
                </ul>
            </div>
        </div>
    </nav>

  <!-- Conteúdo da Página -->
  <main class="container" class="text-center">
    <div class="row">
      <p> POSTAGENS: </p>
      </div>
    <div class="row">


      <!-- Post -->
      <div class="col-lg-8">
        @foreach ($posts as $post)

        <h1 class="mt-4">{{$post->titulo}}</h1>
        <p class="lead">
          por <a href="#">{{$post->nome_usuario}}</a> em {{ $post->created_at }}
        </p>
        

        <p class="lead" align="justify">
          {{$post->texto}}

      </p>
      <p>
          <a href="{{ route ('comentarios', ['id_post' => $post->id, 'id_usuario' => $usuario->id])}}">Ver comentários</a> 
        </p>
        <hr>


        @endforeach
        <!-- Titulo -->
        

        <!-- Autor -->
        

        <hr>
        <!-- Post Content -->


        <!-- Formulário de Comentário -->
  

     
      </div>
    </div>
  </main>

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Caio Lopes & Matheus Cunha 2019</p>
    </div>
  </footer>

</body>
</html>