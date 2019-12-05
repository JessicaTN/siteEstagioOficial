<?php

include_once '../class/servicos.class.php';
include_once '../templateA/topo.php';

$objservicos = new Servicos();
$objservicos->idservicos = $_POST['idservicos'];
$objservicos->titulo= $_POST['titulo'];
$objservicos->data=$_POST['data'];

$objservicos->texto= $_POST['texto'];
$objservicos->idtipo_servico= $_POST['idtipo_servico'];



$nome=$_FILES['foto']['name'];
$nome_temporario=$_FILES['foto']['tmp_name'];
$destino="../img/".$nome;

if(move_uploaded_file($nome_temporario,$destino)){
	echo "imagem enviada";
}
	$objservicos->foto=$_FILES["foto"]['name'];

	
	
$retorno= $objservicos->editar();

//var_dump( $retorno = $objservicos);

if($retorno)

echo "Ediatado com sucesso";    

else
   echo "Não editado";
