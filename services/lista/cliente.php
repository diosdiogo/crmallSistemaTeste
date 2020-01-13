<?php 
	
	require_once("../../conecta.php");


	$lista = '{"result":[' . json_encode(getClientes($conn)) . ']}';
	echo $lista;


	function getClientes($conn) {
	$retorno = array();

	$sql = "select * from cliente;";

	$resultado = mysqli_query($conn, $sql);
	while ($row = mysqli_fetch_assoc($resultado)) {
		array_push($retorno, array(
			'id' => $row['id'],
			'nome' => utf8_encode($row['Nome']),
			'data_de_nascimento' => $row['data_de_nascimento'],
			'sexo' => utf8_encode($row['sexo']),
			'cep' => utf8_encode($row['cep']),
			'endereco' => utf8_encode($row['endereco']),
			'numero' => $row['numero'],
			'complemento' => utf8_encode($row['complemento']),
			'bairro' => utf8_encode($row['bairro']),
			'estado' => utf8_encode($row['estado']),
			'cidade' => utf8_encode($row['cidade']),
			

		));
	}

	return $retorno;
}


 ?>