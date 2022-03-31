<?php 

    //Serve para excluir todas as informações de um objeto específico do banco de dados
    require_once '../controller/Conexao.php';

    if(!empty($_GET['idShort'])) {
        $idShort = $_REQUEST['idShort'];
    }

    echo $idShort;

    $pdo = Conexao::conectar();
    $sql = 'DELETE FROM bdShort WHERE idShort = ?';
    $q = $pdo->prepare($sql);
    $q->execute(array($idShort));
    Conexao::desconectar();
    
    header('Location: ../view/index.php');
      

?>