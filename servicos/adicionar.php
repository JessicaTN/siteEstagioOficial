<?php
include_once '../class/tipo_servico.class.php';

$objtipo_servico= new tipo_servico();
$b = $objtipo_servico->listar();

?>
<html>
    <head> <title>Cadastro de Serviços</title>
        <meta charset="UTF-8"/>
        
    </head>
    <body>
    <center> 
            <h1>Cadastro de Serviços</h1>
            <form action="adicionar_agora.php" method="POST">
                Titulo: <input type="text" name="titulo"> <br>
                Data:<input type="date" name="data"><br>
                Foto:<input type="text" name="foto"><br>
                Texto: <input type="text" name="texto"><br>
                idtipo_servico:<select name="idtipo_servico">
                <option value="">Selecionar</option>
                <?php

                    foreach ($b as list($index, $valor))
                    {
                        echo  "<option value='".$index."'>".$valor."</option>";
                    }
                ?>
            </select>
                <br>
                <input type="submit" name="cadastrar" value="cadastrar">
            </form>
    </center>
    </body>
</html>

