<?php 

	require_once('Produtos/Produto.php');
	require_once('Produtos/Short.php');
	require_once('Produtos/Tenis.php');
    require_once('Produtos/Camiseta.php');

	$tipo = $_POST["tipo"];
	$marca = $_POST['marca'];
	$modelo = $_POST['modelo'];
	$tamanho = $_POST['tamanho'];
	$cor = $_POST['cor'];
	$data_lancamento = $_POST['data_lancamento'];   
	$ocasiao = $_POST['ocasiao'];
	$quantidade = $_POST['quantidade'];


    
	if($tipo == 'c'){
		$manga = $_POST['manga'];
    	$estampa = $_POST['estampa'];
		$conteudo = new Camiseta($tipo,$marca, $modelo, $tamanho, $cor, $data_lancamento, $ocasiao, $manga, $estampa,$quantidade);
	}
    elseif($tipo == 's'){
		$conteudo = new Short($tipo,$marca, $modelo, $tamanho, $cor, $data_lancamento, $ocasiao,$quantidade);
	}else{
		$cadarco = $_POST['cadarco'];
        $conteudo = new Tenis($tipo,$marca, $modelo, $tamanho, $cor, $data_lancamento, $ocasiao,$cadarco,$quantidade);
    }

	$conteudo->inserir($conteudo);
      
?>