<?php

include '../persistencia/conexaoBanco.class.php';

class ClienteAcDAO{

private $conexao = null;
public function __construct(){
  $this->conexao = ConexaoBanco::getInstance();

  public function cadastrarCliente($client){

    try{
      $stat = $this->conexao->prepare(
        "insert into cliente(codcliente,nome,email,idade,msg)
        values(null,?,?,?,?)");

        $stat->bindValue(1,$client->nome);
        $stat->bindValue(2,$client->email);
        $stat->bindValue(3,$client->idade);

        $stat->bindValue(4,$client->msg);

        $stat->execute();
        $this->conexao =  null;
    }catch(PDOException $client){
      echo 'Algo deu errado no cadastro... :(';
    }
  }

  public function buscarCliente(){
    try{
      // criando o select como se fosse no BD
      $stat = $this->conexao->query("select * from cliente");
      // criando uma variável array para armazenar todos os contatos cadastrados
      $array = array();
      // buscar todos os registros cadastrados na classe Contato
      $array = $stat->fetchAll(PDO::FETCH_CLASS,'Cliente');
      // finalizando a conexão novamente
      $this->conexao =  null;

      return $array;// retorna na tela os contatos

    }catch(PDOException $exept){
      echo 'Erro ao buscar os contatos..'.$exept;
    }
  }//fecha o consultar
}
 ?>
