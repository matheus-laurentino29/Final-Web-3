<?php

    require_once 'Produtos/Produto.php';

    class Short extends Produto{

        public function __construct($tipo, $marca, $modelo, $tamanho, $cor, $data_lancamento, $ocasiao,$quantidade){
            parent::__construct($tipo, $marca, $modelo, $tamanho, $cor, $data_lancamento, $ocasiao,$quantidade);
        }

        public function inserir(Short $short){

			$pdo = Conexao::conectar();
			
			$sql = 'INSERT INTO bdShort(tipo,marca,modelo,tamanho,cor,data_lancamento,ocasiao,quantidade)
					VALUES(?,?,?,?,?,?,?,?)';
			
			$q = $pdo->prepare($sql);
 
			$q->execute(array('s',$short->marca, $short->modelo, $short->tamanho, $short->cor,
             $short->data_lancamento, $short->ocasiao,$short->quantidade));
				
			Conexao::desconectar();

			header('Location: index.php');

		}

       // public function alterar(Short $short){
        //    $pdo = Conexao::conectar();
       //    $muda= 'UPDATE `bdshort` SET `cor`= '',`modelo` ='Sair' WHERE `bdshort`.`idShort` = 7';
       //     $q = $pdo->prepare($sql);
       //     Conexao::desconectar();

	//		header('Location: index.php');
      //  }

    }

?>