<?php

if(!isset($_GET['idservicos'])){
    header("Location:listar.php");
}
include_once '../templateA/topo.php';
include_once'../class/servicos.class.php';
include_once'../class/tipo_servico.class.php';

$objservico= new Servicos();
$objservico->idservicos=$_GET['idservicos'];
$retorno=$objservico->retornounico();

$objtipo_servico= new tipo_servico();
$resultado = $objtipo_servico->listar();



?>

<form action ="editar_ok.php" method="POST" enctype="multipart/form-data">
	Titulo: <input type="text" name="titulo" value="<?php echo $retorno->titulo;?>"/><br/>
    Data: <input type="date" name="data" value="<?php echo $retorno->data;?>"/><br/>
    Foto: <input type="file" name="foto" value="<?php echo $retorno->foto;?>"/><br/>
    texto: <input type="text" name="texto" value="<?php echo $retorno->texto;?>"/><br/>
    Tipo do Serviço: 
	<select name="idtipo_servico">
                <option value="" disabled>Selecionar</option>
				
				<?php
				
					foreach ($resultado as $linha){
						echo "<option value='$linha->nome'>$linha->nome</option>";
					}
					
				?>
				</select>
	
	

    <input type="hidden" name="idservicos" value="<?php echo $retorno->idservicos;?>"/><br/>
    <input type="submit"/>
	
	</form>
	<?php
	include_once '../templateA/rodape.php';
	?>
	