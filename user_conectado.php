<?php
require_once ("conecta.php");
  //starta a sessão
    session_start();
  ob_start();
  //resgata os valores das session em variaveis
  $id_colaborador = isset($_SESSION['id_colaborador']) ? $_SESSION['id_colaborador']: ""; 
  $nome = isset($_SESSION['Nome']) ? $_SESSION['Nome']: "";  
  $email = isset($_SESSION['Email']) ? $_SESSION['Email']: "";  
  $senha = isset($_SESSION['Senha']) ? $_SESSION['Senha']: "";
  $perfil= isset( $_SESSION['Perfil'])? $_SESSION['Perfil']: "";
  $empresa= isset( $_SESSION['empresa'])? $_SESSION['empresa']: "";
  $funcao= isset( $_SESSION['funcao'])? $_SESSION['funcao']: "";
  $Imagem= isset( $_SESSION['Imagem'])? $_SESSION['Imagem']: "";		
  $proprietario = isset($_SESSION['proprietario']) ? $_SESSION['proprietario']: " ";
  $logado = isset($_SESSION['logado']) ? $_SESSION['logado']: "N";
  $ativo = isset($_SESSION['ativo']) ? $_SESSION['ativo']: "";  
  
  //varificamos e a var logado contém o valos (S) OU (N), se conter N quer dizer que a pessoa não fez o login corretamente
  //que no caso satisfará nossa condição no if e a pessoa sera redirecionada para a tela de login novamente
  
  $dadosEmpresa = dadosEmpresa($conn,$empresa);

  if ($logado == "N" && $id_colaborador == ""){     
    echo  "<script type='text/javascript'>
          location.href='login.php'
        </script>"; 
    exit();
  }
  if ($dadosEmpresa['Ativo']=='N') {
    echo  "<script type='text/javascript'>
					alert('Barbearia inativa!...');location.href='login.php'
		</script>";
    exit();
  }

  function dadosEmpresa($conn,$empresa){

    $empresaRetorno = array();

    $sql = "select * from empresa where id={$empresa}";

    $resultado = mysqli_query($conn, $sql);

    $empresaRetorno = mysqli_fetch_assoc($resultado);
    
    
    return $empresaRetorno;

    
  }

?>