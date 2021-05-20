<?php

class ConexaoBanco extends PDO{

private static $instancia = null;

public function ConexaoBanco($dsn,$username,$password){

  parent::__construct($dsn,$username,$password);
}
public static function getInstancia(){
if(!isset(self::$instancia)){

  try{
    self::$instancia = new ConexaoBanco("mysql:dbname=orcamento;host=localhost","root","");
}catch(Exception $exep){
  echo 'Erro ao conectar com o Banco de dados...';
  exit();
      }
    }
      return self::$instancia;
  }
}
 ?>
