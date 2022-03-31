<?php 

    //Serve para excluir todas as informações de um objeto específico do banco de dados
    require_once '../controller/Conexao.php';

    if(!empty($_GET['idCamiseta'])) {
        $idCamiseta = $_REQUEST['idCamiseta'];
    }

    echo $idCamiseta;

    $pdo = Conexao::conectar();
    $sql = 'DELETE FROM bdCamiseta WHERE idCamiseta = ?';
    $q = $pdo->prepare($sql);
    $q->execute(array($idCamiseta));
    Conexao::desconectar();
    
    header('Location: ../view/index.php');


?>