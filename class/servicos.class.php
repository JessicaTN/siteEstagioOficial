<?php
	
	Class Servicos{
	
	private $idservicos;
	private $titulo;
	private $data;
	private $foto;
	private $texto;
	private $idtipo_servico;

	private $conexao;
	private $tabela;
	
	public function __construct(){

	$this->conexao=mysqli_connect("localhost","root","","meubanco")
	or die ("não funcionou a conexao");
	
	$this->conexao->set_charset("utf8");
	$this->tabela="servicos";
	}

	public function __destruct(){
		unset($this->conexao);
	}
	public function __get($titulo){
		return $this->$titulo;
	}

	public function __set($titulo, $value){
		$this->$titulo=$value;
	}

	public function AdicionarServico(){
				$sql="INSERT INTO $this->tabela (titulo, data, foto, texto, idtipo_servico) VALUES ('$this->titulo','$this->data','$this->foto','$this->texto','$this->idtipo_servico')";
				echo $sql;
				$resultado= mysqli_query($this->conexao,$sql);
				return $resultado;

			}
			
	public function listar(){
			$sql="SELECT*FROM $this->tabela";
			$resultado=mysqli_query($this->conexao, $sql);

			$retorno= null;
			while($res= mysqli_fetch_assoc($resultado)){
				$objservico= new servicos();
				$objservico->idservicos=$res['idservicos'];
				$objservico->titulo=$res['titulo'];
				$objservico->data=$res['data'];
				$objservico->foto=$res['foto'];
				$objservico->texto=$res['texto'];
				$objservico->idtipo_servico=$res['idtipo_servico'];
				
				$retorno[]=$objservico;
			}
			return $retorno;
		}
		public function retornounico(){
			$sql="SELECT * FROM $this->tabela WHERE idservicos= $this->idservicos";
			$resultado= mysqli_query($this->conexao, $sql);
			
			$retorno=null;
			
			if($res=mysqli_fetch_assoc($resultado)){
				$objservico= new Servicos();
				$objservico->idservicos=$res['idservicos'];
				$objservico->titulo=$res['titulo'];
				$objservico->data=$res['data'];
				$objservico->foto=$res['foto'];
				$objservico->texto=$res['texto'];
				$objservico->idtipo_servico=$res['idtipo_servico'];
			
			$retorno=$objservico;
			}
				return $retorno;
				
	}
	
	public function editar(){
		$sql= "UPDATE $this->tabela SET titulo='$this->titulo', data='$this->data', foto='$this->foto', texto='$this->texto', idtipo_servico='$this->idtipo_servico' WHERE idservicos=$this->idservicos";
		$resultado=mysqli_query($this->conexao, $sql);
	    return $resultado;
	}
	
		public function excluir(){
			$sql= "DELETE FROM $this->tabela WHERE idservicos= $this->idservicos";
			$resultado=mysqli_query($this->conexao, $sql);
			return $resultado;
			
		}
	
	}