<?php

include_once '../class/tipo_servico.class.php';

$objtipo_servico= new tipo_servico();
$listar=$objtipo_servico->listar();
?>
<table border>
    <thead>
        <th>Id</th>
        <th>Nome</th>
       

        <th colspan="2">Ações</th>
</thead>
<tbody>

<?php

foreach($listar as $linha){
    echo "<tr>";
    echo "<td>".$linha->idtipo_servico."</td>";
    echo "<td>".$linha->nome."</td>";
  
    echo "<td> <a href='editar.php?idtipo_servico=".$linha->idtipo_servico."'>Editar</a></td>";
    echo "<td> <a href='excluir.php?idtipo_servico=".$linha->idtipo_servico."'>Excluir</a></td>";

    echo"</tr>";
}
?>