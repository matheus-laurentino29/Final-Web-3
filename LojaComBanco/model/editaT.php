<?php

    //A classe editaT.php muda os dados do banco conforme solicitado pelo usuário
    //As novas informações a serem inseridas são provenientes do edita-tenis.php
    include('../controller/Conexao.php');

    $idTenis = $_POST["idTenis"];
    $marca = $_POST['marca'];
    $modelo = $_POST['modelo'];
    $tamanho = $_POST['tamanho'];
    $cor = $_POST['cor'];
    $data_lancamento = $_POST['data_lancamento'];  
    $cadarco = $_POST['cadarco']; 
    $ocasiao = $_POST['ocasiao'];
    $quantidade = $_POST['quantidade'];

    $pdo = Conexao::conectar();
    $muda= "UPDATE bdtenis SET idTenis = '$idTenis',tipo = 's',marca='$marca', modelo= '$modelo', tamanho= '$tamanho', 
    cor= '$cor',data_lancamento= '$data_lancamento', cadarco= '$cadarco', ocasiao= '$ocasiao',quantidade='$quantidade' WHERE idTenis = '$idTenis'";
    $q = $pdo->prepare($muda);
    $q->execute();

    header('Location: ../view/index.php');

?>