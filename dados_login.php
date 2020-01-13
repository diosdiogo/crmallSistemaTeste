<?php

function buscaDadosLogin($conn,$usuario,$senha){
	$dados = array();
	$resultado = mysqli_query($conn,"select * from login where user='{$usuario}' and pass='{$senha}'");
	$dados = mysqli_fetch_assoc($resultado);
	return $dados;
}
?>