<?php 

    require_once 'Produtos/Conexao.php';

    if(!empty($_GET['idShort'])) {
        $idShort = $_REQUEST['idShort'];
    }

    echo $idShort;

    $pdo = Conexao::conectar();
    $sql = 'DELETE FROM bdShort WHERE idShort = ?';
    $q = $pdo->prepare($sql);
    $q->execute(array($idShort));
    
    Conexao::desconectar();
    header('Location: index.php');
      

?>