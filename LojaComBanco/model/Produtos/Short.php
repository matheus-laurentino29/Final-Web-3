<?php

    require_once 'Produtos/Produto.php';

    class Short extends Produto{

        public function __construct($tipo, $marca, $modelo, $tamanho, $cor, $data_lancamento, $ocasiao,$quantidade){
            parent::__construct($tipo, $marca, $modelo, $tamanho, $cor, $data_lancamento, $ocasiao,$quantidade);
        }

        //-----------------------------------------

        //Função de inserir os dados no banco de dados
        //Ela é chamada no cadastra.php
        public function inserir(Short $short){

			$pdo = Conexao::conectar();
			
			$sql = 'INSERT INTO bdShort(tipo,marca,modelo,tamanho,cor,data_lancamento,ocasiao,quantidade)
					VALUES(?,?,?,?,?,?,?,?)';
			
			$q = $pdo->prepare($sql);
 
			$q->execute(array('s',$short->marca, $short->modelo, $short->tamanho, $short->cor,
             $short->data_lancamento, $short->ocasiao,$short->quantidade));
				
			Conexao::desconectar();

			header('Location: ../view/index.php');

		}

    }

?>