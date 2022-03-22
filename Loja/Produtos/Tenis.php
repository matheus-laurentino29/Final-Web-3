<?php
    
    require_once 'Produtos/Produto.php';

    class Tenis extends Produto{
        
        protected $cadarco;

        public function __construct($tipo, $marca, $modelo, $tamanho, $cor, $data_lancamento, $ocasiao,$cadarco){
            parent::__construct($tipo, $marca, $modelo, $tamanho, $cor, $data_lancamento, $ocasiao,$cadarco);
            $this->cadarco = $cadarco;
        }

        //Getters and Setters:----------------------

        public function getCadarco(){
            return $this->cadarco;
        }
        public function setCadarco($cadarco){
            $this->cadarco = $cadarco;
        }

        //-----------------------------------------

        
        public function inserir(Tenis $tenis){

			$pdo = Conexao::conectar();
			
			$sql = 'INSERT INTO conteudos(tipo,marca,modelo,tamanho,cor,data_lancamento,ocasiao,manga,estampa,cadarco)
					VALUES(?,?,?,?,?,?,?,?,?,?)';
			
			$q = $pdo->prepare($sql);
 
			$q->execute(array('t',$tenis->marca, $tenis->modelo, $tenis->tamanho, $tenis->cor,
             $tenis->data_lancamento, $tenis->ocasiao, $tenis->manga, $tenis->estampa,$tenis->cadarco));
				
			Conexao::desconectar();

			header('Location: index.php');

		}
    }

?>