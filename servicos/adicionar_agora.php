<?php

include_once '../class/servicos.class.php';

$objservico= new Servicos();
$objservico->titulo=$_POST["titulo"];
$objservico->data=$_POST["data"];

$objservico->texto=$_POST["texto"];
$objservico->idtipo_servico=$_POST["idtipo_servico"];


$nome=$_FILES['foto']['name'];
$nome_temporario=$_FILES['foto']['tmp_name'];
$destino="../img/".$nome;

if(move_uploaded_file($nome_temporario,$destino)){
	echo "imagem enviada";
}
	$objservico->foto=$_FILES["foto"]['name'];

$retorno=$objservico->AdicionarServico();

if($retorno)

{
	echo"cadastrado";
}

else{
	echo"Não foi possivel realizar o cadastro";
	}
?>