<?php

include_once '../class/servicos.class.php';

$objservico= new Servicos();
$objservico->titulo=$_POST["titulo"];
$objservico->data=$_POST["data"];
$objservico->foto=$_POST["foto"];
$objservico->texto=$_POST["texto"];

$retorno=$objservico->AdicionarServico();

if($retorno)

{
	echo"cadastrado";
}

else{
	echo"Não foi possivel realizar o cadastro";
	}
?>