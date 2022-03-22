<?php 

    require_once 'Produtos/Conexao.php';
    if(!empty($_GET['idProduto'])) {
        $idProduto = $_REQUEST['idProduto'];
    }

    echo $idProduto;
    $pdo = Conexao::conectar();
    $sql = 'DELETE FROM produtos WHERE idProduto = ?';
    $q = $pdo->prepare($sql);
    $q->execute(array($idProduto));
    Conexao::desconectar();
    header('Location: index.php');
?>