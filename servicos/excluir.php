<?php
if(!isset($_GET['idservicos'])){
	
	header("Location:listar.php");
	
}
include_once'../class/servicos.class.php';

$objservicos= new Servicos();

$objservicos->idservicos=$_GET['idservicos'];

$retorno= $objservicos->excluir();

if($retorno){
	header("Location:listar.php");
}else{
	echo "Não excluido";
}


?>