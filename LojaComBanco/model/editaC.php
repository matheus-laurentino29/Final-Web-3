<?php

    //A classe editaC.php muda os dados do banco conforme solicitado pelo usuário
    //As novas informações a serem inseridas são provenientes do edita-camiseta.php
    include('../controller/Conexao.php');

    $idCamiseta = $_POST["idCamiseta"];
    $marca = $_POST['marca'];
    $modelo = $_POST['modelo'];
    $tamanho = $_POST['tamanho'];
    $cor = $_POST['cor'];
    $data_lancamento = $_POST['data_lancamento'];   
    $ocasiao = $_POST['ocasiao'];
    $manga = $_POST['manga'];
    $estampa = $_POST['estampa'];
    $quantidade = $_POST['quantidade'];


    
    $pdo = Conexao::conectar();
    $muda= "UPDATE bdcamiseta SET idCamiseta = '$idCamiseta',tipo = 's',marca='$marca', modelo= '$modelo', tamanho= '$tamanho', 
    cor= '$cor',data_lancamento= '$data_lancamento', ocasiao= '$ocasiao', manga= '$manga', estampa= '$estampa', quantidade='$quantidade' WHERE idCamiseta = '$idCamiseta'";
    $q = $pdo->prepare($muda);
    $q->execute();

    header('Location: ../view/index.php');

?>