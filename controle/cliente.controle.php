<?php

session_start();

include '../modelo.cliente.class.php';
include '../dao/clientedao.class.php';

// falta o include da validacao;

switch ($_GET['op']) {
  case 'cadastro':

  $lj = new LojaAC();

  $lj->nome = $_POST['txtnome'];
  $lj->idade = $_POST['numbidade'];
  $lj->email = $_POST['txtemail'];
  $lj->jogo = $_POST['jogo'];
  $lj->msg = $_POST['txtmsg'];

  $ljDAO = new ljDAO();
  $ljDAO = cadastroLj($lj);
  $_SESSION['lojaAC'] = serialize($lj);

  header(
    "location:../visao/cliente.resposta.php"
  );
    break;

    case 'consulta':
    $ljDAO = new ljDAO();
    $array = array();
    $array = $ljDAO->buscarLojaAC();
    $_SESSION['ljsAC'] = serialize($array);

    header(
      "location:../visao/LojaAC.consulta.php"
    );
    break;

  default:
    echo "Aff... algo deu errado! <br>
    Tente novamente";
    break;
}

  ?>
