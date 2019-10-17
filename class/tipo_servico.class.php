<?php

    Class tipo_servico{
        
        private $idtipo_servico;
        private $nome;

        private $conexao;
        private $tabela;


        public function __construct()
        {
            $this->conexao=mysqli_connect("localhost","root","","meubanco")
            or die ("não funcionou a conexao");
            
            $this->conexao->set_charset("utf8");
            $this->tabela="tipo_servico";
        }

        public function __destruct() 
        {
            unset($this->conexao);
        }    
        public function __get($nome) 
                {
            return $this->$nome;
        }

        public function __set($nome, $value) 
                {
                $this->$nome = $value;
                }


              public function AdicionarTipoServico(){
                  $sql= "INSERT INTO  $this->tabela (nome) VALUES ('$this->nome')";
                 echo $sql;
                 $resultado= mysqli_query($this->conexao, $sql);
                 return $resultado;
              }  

                public function listar(){

                    $sql="SELECT * FROM $this->tabela";
                    $resultado= mysqli_query($this->conexao,$sql);

                    $retorno = null;

                    $res= mysqli_fetch_all($resultado);

                    //var_dump($res);
                    // while ($res= mysqli_fetch_assoc($resultado)){
                    //     $objtipo_servico= new tipo_servico();
                    //     $objtipo_servico->idtipo_servico=$res['idtipo_servico'];
                    //     $objtipo_servico->nome=$res["nome"];

                    //     $retorno[]=$objtipo_servico;
                    // }
                    return $res;
                }

                public function retornounico(){
                    $sql="SELECT * FROM $this->tabela WHERE idtipo_servico= $this->idtipo_servico";
                    $resultado= mysqli_query($this->conexao, $sql);

                    $retorno= null;
                    if($res= mysqli_fetch_assoc($resultado)){
                        $objtipo_servico= new tipo_servico();
                        $objtipo_servico->idtipo_servico= $res['idtipo_servico'];
                        $objtipo_servico->nome= $res["nome"];

                        $retorno= $objtipo_servico;
                    }
                    $retorno=$objtipo_servico;
                }

    }