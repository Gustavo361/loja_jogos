<?php

  class Validacao{

    //nome
    public static function validarNome($valor){ //perguntar ora ana se precisa mudar o nome das variaveis e se tem q por algo a mais do q so as valid.
      $exp = '/^[^.!@#$%¨&*]{2,40}$/';
      if(preg_match($exp,$valor)){
        return true;
      }else{
        return false;
      }
    }

//email
    public function validarEmail($email)
    {
      return filter_var($email, FILTER_VALIDATE_EMAIL);
    }

    public function testarExpressao($expressao, $variavel)
    {
      return preg_match($expressao,$variavel);
    }

    public static function validar($opcao, $valor): bool
    {
        $expressaoNome = "/^[a-zA-Z]{2,30}$/";

  }
}
 ?>
