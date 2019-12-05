<?php

if(!isset($_GET['idnoticias'])){
	
	header("Location:listar.php");
	
}
include_once '../class/usuario.class.php';

$objnoticias= new Noticia();

$objnoticias->idnoticias=$_GET['idnoticias'];

$retorno= $objnoticias->excluir();

if($retorno){
	header("Location:listar.php");
}else{
	echo "Não excluido";
}


?>