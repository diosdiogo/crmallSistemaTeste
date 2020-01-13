<?php


if (array_key_exists("u", $_GET)){
  $usuario = base64_decode($_GET["u"]);
}else{
  $usuario = $_POST["usuario"]; 
}  
if (array_key_exists("s", $_GET)){
  $senha = base64_decode($_GET["s"]);
}else{
  $senha = $_POST["senha"]; 
} 

require_once("conecta.php");

require_once("dados_login.php");


require_once("cabecalho-menu.php");

  
require_once("telas/index.php");


require_once("rodape.php");

?>
