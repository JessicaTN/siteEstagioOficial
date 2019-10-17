<?php

include_once '../class/tipo_servico.class.php';

$objtipo_servico= new tipo_servico();
$objtipo_servico->nome=$_POST["nome"];

$retorno= $objtipo_servico->AdicionarTipoServico();

if($retorno){
    echo"Cadastrado";
}
else{
    echo"Não foi possivel cadastrar";
}
?>