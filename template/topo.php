<?php
session_start();
if(!isset($_SESSION['administrador'])){
    header("Location:../cozastore/cozastore/login1.php");
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
font-size: 16px;"> Ultimo acesso : 18 Março 2019 &nbsp; <a href="../cozastore/cozastore/sair.php" class="btn btn-danger square-btn-adjust">Sair</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="../template/assets/img/find_user.png" class="user-image img-responsive"/>
					</li>
				
					
                    
					  
                     <li>
                         <a  href="../cliente/listar.php"><i class="fa fa-desktop fa-3x"></i> Listar Clientes</a>
                         <a href="../cliente/adicionar.php"><i class="fa fa-desktop fa-3x"></i> Adicionar Clientes</a>
                         
                    </li>
                   
						   <li  >
                                                       <a   href="../compras/listar.php"><i class="fa fa-bar-chart-o fa-3x"></i>Compras</a>
                    </li>	
                      <li  >
                          <a  href="../produto/listar.php"><i class="fa fa-table fa-3x"></i> Listar Produtos</a>
                          <a  href="../produto/adicionar.php"><i class="fa fa-table fa-3x"></i>+ Produtos</a>
                    </li>
                    				
					<li  >
                                            <a  href="../categorias/listar.php"><i class="fa fa-table fa-3x"></i> Categoria</a>
                                            
                    </li>
                    	<li  >
                            <a  href="../categorias/adicionar.php"><i class="fa fa-table fa-3x"></i> + Categorias</a>
                                            
                    </li>
						
					<li  >
                                            <a  href="../cor/listar.php"><i class="fa fa-square-o fa-3x"></i> Cor</a>
                                            
                    </li>	                   
                   					  
                  <li  >
                      <a  href="../cor/adicionar.php"><i class="fa fa-square-o fa-3x"></i>+ Cor</a>
                    </li>	
                    
                    <li  >
                      <a  href="../forma_de_pagamento.php/listar.php"><i class="fa fa-square-o fa-3x"></i> Forma de Pagamento</a>
                    </li>
                    
                    <li  >
                        <a  href="../forma_de_pagamento.php/adicionar.php"><i class="fa fa-square-o fa-3x"></i> + Forma de pagamento</a>
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