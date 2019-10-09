<?php

		class Noticia{

		private $titulo_da_noticia;
		private $data;
		private $foto;
		private $texto;

		private $conexao;
		private $tabela;


		public function __construct(){

		$this->conexao=mysqli_connect("localhost","root","","meubanco")
			or die ("não funcionou a conexao");
			
			$this->conexao->set_charset("utf8");
			$this->tabela="noticias";
		}

		public function __destruct(){
			unset($this->conexao);
		}
		public function __get($titulo_da_noticia){
			return $this->$titulo_da_noticia;
		}

		public function __set($titulo_da_noticia, $value){
			$this->$titulo_da_noticia=$value;
		}


		public function AdicionarNoticia(){
			$sql="INSERT INTO $this->tabela (titulo_da_noticia, data, foto, texto) VALUES ('$this->titulo_da_noticia','$this->data','$this->foto','$this->texto')";
			$resultado= mysqli_query($this->conexao,$sql);
			return $resultado;

		}

		public function listar(){
			$sql="SELECT*FROM $this->tabela";
			$resultado=mysqli_query($this->conexao, $sql);

			$retorno= null;
			while($res= mysqli_fetch_assoc($resultado)){
				$objnoticia= new noticia();
				$objnoticia->idnoticias=$res['idnoticias'];
				$objnoticia->titulo_da_noticia=$res['titulo_da_noticia'];
				$objnoticia->data=$res['data'];
				$objnoticia->foto=$res['foto'];
				$objnoticia->texto=$res['texto'];
				$retorno[]=$objnoticia;
			}
			return $retorno;
		}
		public function retornounico(){
			$sql="SELECT * FROM $this->tabela WHERE idnoticias= $this->idnoticias";
			$resultado= mysqli_query($this->conexao, $sql);

			$retorno= null;

			if($res= mysqli_fetch_assoc($resultado)){
				$objnoticia= new Noticia();
				$objnoticia->idnoticias=$res['idnoticias'];
				$objnoticia->titulo_da_noticia=$res['titulo_da_noticia'];
				$objnoticia->data=$res['data'];
				$objnoticia->foto=$res['foto'];
				$objnoticia->texto=$res['texto'];

				$retorno=$objnoticia;
			}
			return $retorno;
		}

		public function editar(){
			$sql="UPDATE $this->tabela SET titulo_da_noticia= '$this->titulo_da_noticia', data='$this->data', foto='$this->foto', texto='$this->texto' WHERE idnoticias=$this->idnoticias";

			$resultado=mysqli_query($this->conexao, $sql);
			return $resultado;
		}

		public function excluir(){
			$sql="DELETE FROM  $this->tabela WHERE idnoticias= $this->idnoticias";

			$resultado=mysqli_query($this->conexao, $sql);
			return $resultado;

		}



}
?>