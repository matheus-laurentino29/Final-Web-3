<?php

    require_once 'Produtos/Produto.php';
    require_once 'Produtos/Conexao.php';

    class Camiseta extends Produto{
        
        protected $manga;
        protected $estampa;
        
        public function __construct($tipo, $marca, $modelo, $tamanho, $cor, $data_lancamento, $ocasiao, $manga, $estampa){
            parent::__construct($tipo, $marca, $modelo, $tamanho, $cor, $data_lancamento, $ocasiao);
            $this->manga = $manga;
            $this->estampa = $estampa;
        }

        //Getters and Setters:----------------------

        public function getManga(){
            return $this->manga;
        }
        public function setManga($manga){
            $this->manga = $manga;
        }

        public function getEstampa(){
            return $this->estampa;
        }
        public function setEstampa($estampa){
            $this->estampa = $estampa;
        }

        //-----------------------------------------

        public function inserir(Camiseta $camiseta){

			$pdo = Conexao::conectar();
			
			$sql = 'INSERT INTO produtos(tipo,marca,modelo,tamanho,cor,data_lancamento,ocasiao,manga,estampa)
					VALUES(?,?,?,?,?,?,?,?,?)';
			
			$q = $pdo->prepare($sql);
 
			$q->execute(array('c',$camiseta->marca, $camiseta->modelo, $camiseta->tamanho, $camiseta->cor,
             $camiseta->data_lancamento, $camiseta->ocasiao, $camiseta->manga, $camiseta->estampa));
				
			Conexao::desconectar();

			header('Location: index.php');

		}

    }


?>