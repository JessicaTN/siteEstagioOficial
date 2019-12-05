<?php
session_start();

if(!isset($_SESSION['id_administrador'])){
    header("Location:../login/login.php");
}

?>
﻿<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Free Bootstrap Admin Template : Administrador</title>
	<!-- BOOTSTRAP STYLES-->
        <link href="../template/assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="../template/assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="../template/assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="../template/assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Administrador</a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> Ultimo acesso: 2019 &nbsp; <a href="../login/deslogar.php" class="btn btn-danger square-btn-adjust">Sair</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="../template/assets/img/find_user.png" class="user-image img-responsive"/>
					</li>
				
					
                    
					  
                     <li>
                         <a  href="../noticia/listar.php"><i class="fa fa-desktop fa-3x"></i> Listar Noticias</a>
                         <a href="../noticia/adicionar.php"><i class="fa fa-desktop fa-3x"></i> Adicionar Noticias</a>
                         <a href="../noticia/editar.php"><i class="fa fa-desktop fa-3x"></i> Editar Noticias</a>
                    </li>
                   
						   <li  >
                                                       <a   href="../servicos/listar.php"><i class="fa fa-bar-chart-o fa-3x"></i>Serviços</a>
                    </li>	
                      <li  >
                          
                          <a  href="../servicos/adicionar.php"><i class="fa fa-table fa-3x"></i>+ Serviços</a>
                          <a  href="../servicos/editar.php"><i class="fa fa-table fa-3x"></i> Editar Serviço</a>
                    </li>
                    				
					<li  >
                                            <a  href="../tipo_servico/listar.php"><i class="fa fa-table fa-3x"></i> Tipo de Serviços</a>
                                            
                    </li>
                    	<li  >
                            <a  href="../tipo_servico/adicionar.php"><i class="fa fa-table fa-3x"></i> + Tipo serviços</a>
                            <a  href="../tipo_servico/editar.php"><i class="fa fa-table fa-3x"></i> Editar Tipo serviços</a>
                                            
                    </li>
						
					
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Administrador</h2>   
                        <h5>Bem-vindo </h5>
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />