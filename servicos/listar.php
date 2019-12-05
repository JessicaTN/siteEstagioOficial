<?php

include_once '../class/servicos.class.php';
include_once '../templateA/topo.php';

$objservicos= new Servicos();
$listar=$objservicos->listar();
?>
<table border>
    <thead>
        <th>Id</th>
        <th>Titulo</th>
        <th>Data</th>
        <th>Foto</th>
        <th>Texto</th>
		<th>Tipo Serviço</th>
        <th colspan="2">Ações</th>
</thead>
<tbody>

<?php

foreach($listar as $linha){
    echo "<tr>";
    echo "<td>".$linha->idservicos."</td>";
    echo "<td>".$linha->titulo."</td>";
    echo "<td>".$linha->data."</td>";
    echo "<td><img src='../img/".$linha->foto."' width=100px></td>";
    echo "<td>".$linha->texto."</td>";
    echo "<td>".$linha->idtipo_servico."</td>";
	
    echo "<td> <a href='editar.php?idservicos=".$linha->idservicos."'>Editar</a></td>";
    echo "<td> <a href='excluir.php?idservicos=".$linha->idservicos."'>Excluir</a></td>";

    echo"</tr>";
}

include_once '../templateA/rodape.php';
?>
