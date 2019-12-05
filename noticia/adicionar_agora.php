<?php
include_once '../class/usuario.class.php';
include_once '../templateA/topo.php';


$objnoticia= new Noticia();
$objnoticia->titulo_da_noticia=$_POST["titulo_da_noticia"];
$objnoticia->data=$_POST["data"];

$objnoticia->texto=$_POST["texto"];

$nomeimg= $_FILES['foto']['name'];
$nomeTemporario= $_FILES['foto']['tmp_name'];
$destino= '../img/'.$nomeimg;

if(move_uploaded_file($nomeTemporario,$destino))
{
	echo "<center>Imagen enviada!</center>";
}
else{
    "<center>Error al insertar imagen</center>";
}
$objnoticia->foto = $nomeimg;

$retorno=$objnoticia->AdicionarNoticia();

if($retorno)
{
    echo"Cadastro realizado";
} else{
    echo"Não foi possivel realizar o cadastro";
}

?>