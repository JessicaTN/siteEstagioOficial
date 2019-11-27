<?php

class administrador{
	
	private $id_administrador;
	private $senha;
	private $email;
	private $nome;
	
	private $conexao;
	private $tabela;
	
	public function __construct(){

	$this->conexao=mysqli_connect("localhost","root","","meubanco")
	or die ("não funcionou a conexao");
	
	$this->conexao->set_charset("utf8");
	$this->tabela="administrador";
	}

	public function __destruct(){
		unset($this->conexao);
	}
	public function __get($nome){
		return $this->$nome;
	}

	public function __set($nome, $value){
		$this->$nome=$value;
	}
	
	public function login(){
		
		$sql= "	SELECT * FROM $this->tabela WHERE email='$this->email' AND senha='$this->senha'";
		$resultado= mysqli_query($this->conexao,$sql);
	    $retorno=null;
		
		if($res=mysqli_fetch_assoc($resultado)){
			
			$objadministrador= new administrador();
			$objadministrador-> id_administrador=$res['id_administrador'];
			$objadministrador-> nome=$res['nome'];
			
			$retorno= $objadministrador;
				var_dump($retorno);
		}
		return $retorno;

	}
	}
?>