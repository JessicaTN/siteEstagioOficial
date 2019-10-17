<?php
	
	Class Servicos{
	
	private $titulo;
	private $data;
	private $foto;
	private $texto;

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
				$sql="INSERT INTO $this->tabela (titulo, data, foto, texto) VALUES ('$this->titulo','$this->data','$this->foto','$this->texto')";
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
				$objservicos->titulo=$res['titulo'];
				$objservisos->data=$res['data'];
				$objservisos->foto=$res['foto'];
				$objservisos->texto=$res['texto'];
				$objservisos->tipo_servico_idtipo_servico=$res['idtipo_servico'];
				
				$retorno[]=$objservicos;
			}
			return $retorno;
		}
	}