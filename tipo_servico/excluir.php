<?php
if(!isset($_GET['idtipo_servico'])){
	
	header("Location:listar.php");
	
}
include_once'../class/tipo_servico.class.php';

$objtipo_servico= new tipo_servico();

$objtipo_servico->idtipo_servico=$_GET['idtipo_servico'];

$retorno= $objtipo_servico->excluir();

if($retorno){
	header("Location:listar.php");
}else{
	echo "Não excluido";
}

