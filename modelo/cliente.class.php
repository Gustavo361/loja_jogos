<?php

class Cliente
{

private $nome; //
private $idade;
private $email; //
private $jogo;
private $msg;

function __construct(){}

function __destruct(){}

public function __get($atributo)
{
    return $this->$atributo;
}

public function __set($atributo, $valor)
{
    $this->$atributo = $valor;
}

function __toString(){
  return nl2br("Nome: $this->nome
                Idade: $this->idade
                email: $this->email
                jogo: $this->jogo
                msg: $this->msg");
  }
}

 ?>
