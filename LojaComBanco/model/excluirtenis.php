<?php 

    //Serve para excluir todas as informações de um objeto específico do banco de dados
    require_once '../controller/Conexao.php';
      
    if(!empty($_GET['idTenis'])) {
        $idTenis = $_REQUEST['idTenis'];
    }

    echo $idTenis;

    $pdo = Conexao::conectar();
    $sql = 'DELETE FROM bdTenis WHERE idTenis = ?';
    $q = $pdo->prepare($sql);
    $q->execute(array($idTenis));
    Conexao::desconectar();

    header('Location: ../view/index.php');

?>