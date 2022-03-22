<?php 

    require_once 'Produtos/Conexao.php';
      
        if(!empty($_GET['idTenis'])) {
            $idTenis = $_REQUEST['idTenis'];
        }

        echo $idTenis;

        $pdo = Conexao::conectar();
        $sql = 'DELETE FROM bdTenis WHERE idTenis = ?';
        $q = $pdo->prepare($sql);
        $q->execute(array($idTenis));
        Conexao::desconectar();
        header('Location: index.php');
?>