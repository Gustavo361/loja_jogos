<?php
	session_start();
?>
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

	<div class="obg">
    <h1 style = "color:white" >Muito obrigado por nor escolher! </h1>
  </div>
		<?php
			if( isset($_SESSION['msg']) &&
				isset($_SESSION['cliente']) ){

				include '../modelo/cliente.class.php';
				$lj = new LojaAC();

				$lj = unserialize( $_SESSION['cliente'] );
				echo '<br />'.$_SESSION['msg'].
					'<br /><br /><br/><br/>'.$lj;
			}
		?>

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
