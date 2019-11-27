<?php

session_start();
include_once '../class/administrador.class.php';
print_r($_POST);
$objadministrador = new administrador();
$objadministrador->email=$_POST['email'];
$objadministrador->senha=$_POST['senha'];

$resultado= $objadministrador->login();
var_dump($resultado);

if($resultado){
	$_SESSION['id_administrador']= $resultado->id_administrador;
	$_SESSION['email']= $resultado->email;
	$_SESSION['senha']= $resultado->senha;
	$_SESSION['nome']= $resultado->nome;
	//$_SESSION['login']=true;

	header("Location:../servicos/listar.php");
	
	echo "logado!";
}

     else{
         echo "Não logado!";
}
	