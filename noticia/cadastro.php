 <?php
       include_once '../templateA/topo.php';
       ?> 

<!DOCTYPE html>
<html>
    <head> <title>Cadastro de Noticias</title>
        <meta charset="UTF-8"/>
        
    </head>
    <body>
    <center> 
            <h1>Cadastro de Noticias</h1>
            <form action="adicionar_agora.php" method="POST" enctype="multipart/form-data">
                Titulo da Noticia: <input type="text" name="titulo_da_noticia"> <br>
                Data:<input type="date" name="data"><br>
                Foto:<input type="file" name="foto" ><br>
                Texto: <input type="text" name="texto"><br>
                <br>
                <input type="submit" name="cadastrar" value="cadastrar">
            </form>
    </center>
    </body>
</html>
<?php
       include_once '../templateA/rodape.php';
       ?> 