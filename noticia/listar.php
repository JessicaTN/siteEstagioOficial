<?php

include_once '../class/usuario.class.php';

$objnoticia= new noticia();
$listar=$objnoticia->listar();
?>
<table border>
    <thead>
        <th>Id</th>
        <th>Titulo Noticia</th>
        <th>Data</th>
        <th>Foto</th>
        <th>Texto</th>

        <th colspan="2">Ações</th>
</thead>
<tbody>

<?php

foreach($listar as $linha){
    echo "<tr>";
    echo "<td>".$linha->idnoticias."</td>";
    echo "<td>".$linha->titulo_da_noticia."</td>";
    echo "<td>".$linha->data."</td>";
    echo "<td>".$linha->foto."</td>";
    echo "<td>".$linha->texto."</td>";
    echo "<td> <a href='editar.php?idnoticias=".$linha->idnoticias."'>Editar</a></td>";
    echo "<td> <a href='excluir.php?idnoticias=".$linha->idnoticias."'>Excluir</a></td>";

    echo"</tr>";
}
?>

</tbody>
</table>
