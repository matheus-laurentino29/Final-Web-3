<?php
include("Produtos/Conexao.php");
$idShort = $_POST["idShort"];
$marca = $_POST['marca'];
$modelo = $_POST['modelo'];
$tamanho = $_POST['tamanho'];
$cor = $_POST['cor'];
$data_lancamento = $_POST['data_lancamento'];   
$ocasiao = $_POST['ocasiao'];
$quantidade = $_POST['quantidade'];

$pdo = Conexao::conectar();
$muda= "UPDATE bdshort SET idShort = '$idShort',tipo = 's',marca='$marca', modelo= '$modelo', tamanho= '$tamanho', 
cor= '$cor',data_lancamento= '$data_lancamento', ocasiao= '$ocasiao',quantidade='$quantidade' WHERE idShort = '$idShort'";
$q = $pdo->prepare($muda);
$q->execute();

header('Location: index.php');

?>