<?php

if(!isset ($_GET['idnoticias'])){
    header("Location:listar.php");
}

include_once '../class/usuario.class.php';

$objtonoticia= new Noticia();
$objtonoticia->idnoticias=$_GET['idnoticias'];

$retorno=$objtonoticia->retornounico();


?>

<form action="editar_ok.php" method="POST">
    Titulo da Noticia : <input type="text" name="titulo_da_noticia" value="<?php echo $retorno->titulo_da_noticia;?>"/><br/>
    Data : <input type="date" name="data" value="<?php echo $retorno->data;?>"/><br/>
    Foto : <input type="text" name="foto" value="<?php echo $retorno->foto;?>"/><br/>
    texto : <input type="text" name="texto" value="<?php echo $retorno->texto;?>"/><br/>
    <input type="hidden" name="idnoticias" value="<?php echo $retorno->idnoticias;?>"/><br/>
    <input type="submit"/>

</form>

