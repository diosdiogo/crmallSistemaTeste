<?php 
	
	require_once("../../conecta.php");

if (isset($_POST['salvar'])) {
	
	$id=$_POST['id'];
	$nome=$_POST['nome'];
	$data_de_nascimento=date('Y-m-d',strtotime(str_replace("/", "-", $_POST['data_de_nascimento'])));
	$genero = $_POST['genero'];
	$cep=$_POST['cep'];
	$endereco=$_POST['endereco'];
	$numero=$_POST['numero'];
	$complemento=$_POST['complemento'];
	$bairro=$_POST['bairro'];
	$cidade=$_POST['cidade'];
	$uf=$_POST['uf'];

	$usuario1 = $_POST['usuario1'];
	$senha1=$_POST['senha1'];

	insereCliente($conn, $nome, $data_de_nascimento,$genero,$cep,$endereco,$numero,$complemento,$bairro,$cidade,$uf);

}
if (isset($_POST['editar'])) {
	
	$id=$_POST['id'];
	$nome=$_POST['nome'];
	$data_de_nascimento=date('Y-m-d',strtotime(str_replace("/", "-", $_POST['data_de_nascimento'])));
	$genero = $_POST['genero'];
	$cep=$_POST['cep'];
	$endereco=$_POST['endereco'];
	$numero=$_POST['numero'];
	$complemento=$_POST['complemento'];
	$bairro=$_POST['bairro'];
	$cidade=$_POST['cidade'];
	$uf=$_POST['uf'];

	$usuario1 = $_POST['usuario1'];
	$senha1=$_POST['senha1'];

	alterarCliente($conn, $id,$nome, $data_de_nascimento,$genero,$cep,$endereco,$numero,$complemento,$bairro,$cidade,$uf);

}

function insereCliente($conn, $nome, $data_de_nascimento,$genero,$cep,$endereco,$numero,$complemento,$bairro,$cidade,$uf) {
	$query = "insert into cliente (Nome, data_de_nascimento, sexo, cep, endereco,numero, complemento, bairro, estado, cidade)values ('{$nome}','{$data_de_nascimento}','{$genero}','{$cep}','{$endereco}',{$numero},'{$complemento}','{$bairro}','{$cidade}','{$uf}')";

	$inserir = mysqli_query($conn, $query);

	//echo ("ID inserido = \n" . mysqli_insert_id($conn)."SQL ".$query);

	if (mysqli_insert_id($conn) != 0) {

		//echo "<script type=\"text/javascript\">alert('Não inseriu');</script>";

		header("Location: ../../system.php?u=<?=$usuario1?>&s=<?=$senha1?>");

	} else {
		header("Location: ../../alunos_lista.php?u=<?=$usuario1?>&s=<?=$senha1?>");

		
	}
	return $inserir;

}

function alterarCliente($conn, $id,$nome, $data_de_nascimento,$genero,$cep,$endereco,$numero,$complemento,$bairro,$cidade,$uf) {
	$query = "update cliente set Nome='{$nome}', data_de_nascimento='{$data_de_nascimento}', sexo='{$genero}', cep='{$cep}', endereco='{$endereco}', numero={$numero} , complemento='{$complemento}', bairro='{$bairro}', estado='{$uf}', cidade='{$cidade}' where id={$id};";

	$inserir = mysqli_query($conn, $query);

	//echo ("ID inserido = \n" . mysqli_insert_id($conn)."SQL ".$query);

	if (mysqli_affected_rows($conn) != 0) {

		//echo "<script type=\"text/javascript\">alert('Não inseriu');</script>";

		header("Location: ../../system.php?u=<?=$usuario1?>&s=<?=$senha1?>");

	} else {
		header("Location: ../../alunos_lista.php?u=<?=$usuario1?>&s=<?=$senha1?>");

		
	}
	return $inserir;

}

 ?>