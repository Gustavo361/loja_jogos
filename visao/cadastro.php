<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="teste.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <meta name = "viewport" content = "width = device-width, initial-scale = 1">
      <link rel = "stylesheet" href = "https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/css/materialize.min.css">
      <script type = "text/javascript" src = "https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script src = "https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/js/materialize.min.js">
      </script>
    <title>Loja Gamer - A melhor do multiverso</title>
  </head>
  <body>

    <header>
      <form action="../controle/cliente.controle.php?op=cadastrar" method="post"></form>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Loja Gamer Multiversal</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="#">Início<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contate-nos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Quem somos</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Categorias de jogos
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="#">Ação e aventura</a>
                <a class="dropdown-item" href="#">Terror e suspense</a>
                <a class="dropdown-item" href="#">Puzzles</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>
    </header>

    <div class="formulario">
    <div class="row">
      <form class="col s12">
        <div class="row">
          <div class="input-field col s6">
            <input id="nome" type="text" class="validate" name="txtnome" required>
            <label for="nome"><h8 style = "color:white">Nome completo</h8> </label>
          </div>
          <div class="input-field col s6">
            <input id="idade" type="number" class="validate" name="numbidade" required>
            <label for="idade"><h8 style = "color:white">Idade</h8></label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <input id="email" type="email" class="validate" name="txtemail" required>
            <label for="email"><h8 style = "color:white">Email</h8></label>
          </div>
        </div>
          <div class="dropdown">
          <button name="jogo" class="btn btn-secondary dropdown-toggle" style="background-color: #c5cfce;" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" required>
            Jogos disponíveis
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="ascr" href="#">Assassin's creed III - </a>
            <a class="finfan" href="#">Final Fantasy XIV - </a>
            <a class="litnigh" href="#">Little Nightmares</a>
          </div>
        </div>
        <div class="form-group">
          <label for="validationTextarea"><h8 style = "color:white">Mensagem</h8></label>
          <textarea class="form-control" name="txtmsg" id="validationTextarea" placeholder="Digite aqui uma mensagem se quiser" ></textarea>
        </div>
        <button type="submit" class="btn btn-info">Enviar</button>
      </form>
    </div>
  </div>
    <p>___________________________________________________________________________________________________________________________________________________________________________________________________________________________
    </p>
    <footer>
      <footer>
        <div class="container" style="text-decoration: black;" >
          <div class="row">
            <div class="col l6 s12">
              <h5 class="white-text">Loja Gamer</h5>
              <p class="grey-text text-lighten-4">© 2020 Gustavo's Corporation. All rights reserved. All trademarks are property of their respective owners in the US and other countries.
                VAT included in all prices where applicable.</p>
            </div>
            <div class="col l4 offset-l2 s12">
              <h5 class="white-text">Links</h5>
              <ul>
                <li><a class="grey-text text-lighten-3" href="#!">| Privacy Policy |</a></li>
                <li><a class="grey-text text-lighten-3" href="#!">| Legal |</a></li>
                <li><a class="grey-text text-lighten-3" href="#!">| Steam Subscriber Agreement |</a></li>
                <li><a class="grey-text text-lighten-3" href="#!">| Refunds |</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="footer-copyright">
          <div class="container">
          © 2020 Copyright Text
          </div>
        </div>
      </footer>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
  </body>
</html>
