<?php

include_once '../class/usuario.class.php';

$objnoticia = new Noticia();
$objnoticia->titulo_da_noticia= $_POST['titulo_da_noticia'];
$objnoticia->data=$_POST['data'];
$objnoticia->foto= $_POST['foto'];
$objnoticia->texto= $_POST['texto'];
$objnoticia->idnoticias= $_POST['idnoticias'];

$retorno= $objnoticia->editar();
echo "<br>";

if($retorno)

echo "Ediatado com sucesso";    

else
   echo "Não editado";
