<?php
include_once '../class/usuario.class.php';

$objnoticia= new Noticia();
$objnoticia->titulo_da_noticia=$_POST["titulo_da_noticia"];
$objnoticia->data=$_POST["data"];
$objnoticia->foto=$_POST["foto"];
$objnoticia->texto=$_POST["texto"];

$retorno=$objnoticia->AdicionarNoticia();

if($retorno)
{
    echo"Cadastro realizado";
} else{
    echo"Não foi possivel realizar o cadastro";
}

?>