<?php

    require_once 'Produtos/Produto.php';

    class Short extends Produto{

        public function __construct($tipo, $marca, $modelo, $tamanho, $cor, $data_lancamento, $ocasiao){
            parent::__construct($tipo, $marca, $modelo, $tamanho, $cor, $data_lancamento, $ocasiao);
        }

        public function inserir(Short $short){

			$pdo = Conexao::conectar();
			
			$sql = 'INSERT INTO produtos(tipo,marca,modelo,tamanho,cor,data_lancamento,ocasiao)
					VALUES(?,?,?,?,?,?,?)';
			
			$q = $pdo->prepare($sql);
 
			$q->execute(array('s',$short->marca, $short->modelo, $short->tamanho, $short->cor,
             $short->data_lancamento, $short->ocasiao));
				
			Conexao::desconectar();

			header('Location: index.php');

		}

    }

?>