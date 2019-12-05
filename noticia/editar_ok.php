<?php

include_once '../class/usuario.class.php';
include_once '../templateA/topo.php';

$objnoticia = new Noticia();
$objnoticia->titulo_da_noticia= $_POST['titulo_da_noticia'];
$objnoticia->data=$_POST['data'];

$objnoticia->texto= $_POST['texto'];
$objnoticia->idnoticias= $_POST['idnoticias'];

$nome=$_FILES['foto']['name'];
$nome_temporario=$_FILES['foto']['tmp_name'];
$destino="../img/".$nome;

if(move_uploaded_file($nome_temporario,$destino)){
	echo "imagem enviada";
}
	$objnoticia->foto=$_FILES["foto"]['name'];


$retorno= $objnoticia->editar();
echo "<br>";

if($retorno)

echo "Ediatado com sucesso";    

else
   echo "Não editado";
