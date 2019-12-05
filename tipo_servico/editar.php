<?php

if(!isset($_GET['idtipo_servico'])){
    header("Location:listar.php");
}

include_once'../class/tipo_servico.class.php';
include_once '../templateA/topo.php';

$objtipo_servico= new tipo_servico();
$objtipo_servico->idtipo_servico=$_GET['idtipo_servico'];
$retorno=$objtipo_servico->retornounico();


?>
<form action ="editar_ok.php" method="POST">
	Nome: <input type="text" name="nome" value="<?php echo $retorno->nome;?>"/><br/>
    
	 <input type="hidden" name="idtipo_servico" value="<?php echo $retorno->idtipo_servico;?>"/><br/>
    <input type="submit"/>
 </form>
 
 <?php
 include_once '../templateA/rodape.php';
 ?>