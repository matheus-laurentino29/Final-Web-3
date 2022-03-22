<?php 

    require_once 'Produtos/Conexao.php';

    if(!empty($_GET['idCamiseta'])) {
        $idCamiseta = $_REQUEST['idCamiseta'];
    }

    echo $idCamiseta;

    $pdo = Conexao::conectar();
    $sql = 'DELETE FROM bdCamiseta WHERE idCamiseta = ?';
    $q = $pdo->prepare($sql);
    $q->execute(array($idCamiseta));
    Conexao::desconectar();
    header('Location: index.php');


?>