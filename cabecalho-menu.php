<?php
require_once("conecta.php");

require_once("dados_login.php");



$usuario1 = base64_encode($usuario);
$senha1 = base64_encode($senha);

$dados_usuario = buscaDadosLogin($conn, $usuario, $senha); #busca-dados-login.php

if ($dados_usuario['user'] != $usuario) {
  header("Location: login.php?login_invalido=true&usuario_ativo=true"); #redireciona para a pagina
  die();
}


?>
<!DOCTYPE html>
<html ng-app="AppSistema" lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Sistema CRMALL</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower/Ionicons/css/ionicons.min.css">

  <!-- Select2 -->
  <link rel="stylesheet" href="bower/select2/dist/css/select2.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">

   <!-- Angular -->
  <!--<script type="text/javascript" src="js/angular.js"></script> -->
  <script type="text/javascript" src="angular/angular.min.js"></script>
  <script type="text/javascript" src="angular/angular-messages.min.js"></script>
  <script type="text/javascript" src="angular/dirPagination.js"></script>



  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

  <script>
  angular.module("AppSistema",["ngMessages","angularUtils.directives.dirPagination"]);
  angular.module("AppSistema").controller("AppSistemaCtrl",function ($scope, $http) {
   

    $scope.dados = [];
   
    $scope.nome="teste" 
    $scope.urlBase="http://localhost/crmall/services/";
   


    $scope.ordenar = function(keyname){
      $scope.sortKey = keyname;
      $scope.reverse = !$scope.reverse;
    };

    var carregaDados = function function_name(){

      $http({
        method: 'GET',
        url: $scope.urlBase+'lista/cliente.php?'
      }).then(function onSuccess(response){
        $scope.dados=response.data.result[0];

      }).catch(function onError(response){
        $scope.resultado=response.data.result[0];
      });

    }

   carregaDados();


$scope.salvarEditar = function(id,cliente,data_de_nascimento,genero,cep,cep,numero,complemento,bairro,cidade,estado){
  //alert(id);
  
     $http({
        method: 'GET',
        url: $scope.urlBase+'salvar/salvarEditar.php?editar=S&id='+id+'&cliente='+cliente+'&data_de_nascimento='+data_de_nascimento+'&genero='+genero+'&cep='+cep+'&cep='+cep+'&numero='+numero+'&complemento='+complemento+'&bairro='+bairro+'&cidade='+cidade+'&estado='+estado
      }).then(function onSuccess(response){
        //window.location.reload();
      }).catch(function onError(response){

      });

  

    };


  });

</script>

</head>
<body class="hold-transition skin-blue sidebar-mini" ng-controller="AppSistemaCtrl">
<!-- Site wrapper -->
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>CRMALL</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Sistema</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Navegação</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
     
   
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs"> <?=$dados_usuario['user']?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                 <?=$dados_usuario['user']?>
                 
                </p>
              </li>
              <!-- Menu Body -->
              
              <!-- Menu Footer-->

                <div class="pull-right">
                  <a href="logout.php" class="btn btn-default btn-flat">Sair</a>
                </div>
              </li>
            </ul>
          </li>
          
        </ul>
      </div>
    </nav>
  </header>

  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p> <?=$dados_usuario['user']?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
     
     
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Menu</li>
    
        <li class="treeview">
          <a href="#">
            <i class="fa fa-share"></i> <span>Cadastro</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
         
          <ul class="treeview-menu">
            <li><a href="system.php?u=<?=$usuario1?>&s=<?=$senha1?>"><i class="fa fa-circle-o"></i> Clientes</a></li>
           
            
            
           
          </ul>
        </li>
        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>