<?php

class usuario{

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
	$this->tabela="usuario";
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
