<?php

include_once '../class/tipo_servico.class.php';
include_once '../templateA/topo.php';

$objtipo_servico = new tipo_servico();
$objtipo_servico->idtipo_servico = $_POST['idtipo_servico'];
$objtipo_servico->nome= $_POST['nome'];
$objtipo_servico->idtipo_servico= $_POST['idtipo_servico'];

$retorno= $objtipo_servico->editar();

//var_dump( $retorno = $objtipo_servico);

if($retorno)

echo "Editado com sucesso";    

else
   echo "Não editado";
