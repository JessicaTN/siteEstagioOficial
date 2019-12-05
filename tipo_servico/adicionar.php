<?php
include_once '../templateA/topo.php';
?>
<html>
    <head></head>
    <body>
        <h3>Tipo de Serviços</h3>
        <form action="adicionar_agora.php" method="POST" enctype="multipart/form-data">
           Nome:<input type="text" name="nome"/><br />         
                      
            <input type="submit" value="Cadastrar"/>
        </form>
    </body>
</html>
<?php
include_once '../templateA/rodape.php';
?>