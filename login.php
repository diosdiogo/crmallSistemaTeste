<?php
$login_valido='true';
if(array_key_exists("login_invalido", $_GET) && $_GET["login_invalido"]=="true"){
  $login_valido='true';
}
?>

<!DOCTYPE html>
<html lang="pt-br">
    
<head>
        <title>Sistema (1.0)</title><meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="login/css/bootstrap.min.css" />
		<link rel="stylesheet" href="login/css/bootstrap-responsive.min.css" />
        <link rel="stylesheet" href="login/css/matrix-login.css" />
        <link href="login/font-awesome/css/font-awesome.css" rel="stylesheet" />
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>

    </head>
    <body>
        <div id="fundo">
            <div id="loginbox">            
                <form name="form_login" method="post" action="system.php">
                    <div class="control-group">
                        <div class="controls">
                            <div class="main_input_box">
                                <span class="add-on bg_lg"><i class="icon-user"> </i></span><input type="text" name="usuario" placeholder="Usuário" />
                            </div>
                        </div>
                    </div>

                 
                    <div class="control-group">
                        <div class="controls">
                            <div class="main_input_box">
                                <span class="add-on bg_ly"><i class="icon-lock"></i></span><input type="password" name="senha" placeholder="Senha" />
                            </div>
                        </div>
                    </div>

                       <div class="form-group has-feedback">
                        <?php
                        if(array_key_exists("login_invalido", $_GET) && $_GET["login_invalido"]=="true"){

                        //if($login_valido='false'){ 
                          ?> 
                          <p class="text-danger">Nome de Usuário ou Senha Inválidos !!!</p> 
                          <?php 
                        }
                        if(array_key_exists("usuario_ativo", $_GET) && $_GET["usuario_ativo"]=="false"){

                        //if($login_valido='false'){ 
                          ?> 
                          <p class="text-danger">Usuário Está Desativado !!!</p> 
                          <?php 
                        }
                       

                        ?>
                       
                      </div>

                    <div class="form-actions">
                        <span class="pull-left"><a href="#" class="flip-link btn btn-info" id="to-recover">Esqueceu a senha?</a></span>
                        <span class="pull-right"><button type="submit" class="btn btn-success"> Login</button></span>
                    </div>
                </form>


                <form id="recoverform" action="#" class="form-vertical">
                    <p class="normal_text">Digite seu endereço de e-mail abaixo.</p>
                    
                        <div class="controls">
                            <div class="main_input_box">
                                <span class="add-on bg_lo"><i class="icon-envelope"></i></span><input type="text" placeholder="E-mail address" />
                            </div>
                        </div>
                
                    <div class="form-actions">
                        <span class="pull-left"><a href="#" class="flip-link btn btn-success" id="to-login">&laquo; Login</a></span>
                        <span class="pull-right"><a class="btn btn-info">Recuperar</a></span>
                    </div>
                </form>

            </div>
        </div>
        
        <script src="login/js/jquery.min.js"></script>  
        <script src="login/js/matrix.login.js"></script> 
    </body>

</html>

?>
