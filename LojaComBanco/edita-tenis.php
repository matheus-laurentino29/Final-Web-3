<?php
include("Produtos/Conexao.php");


$idTenis = $_GET["idTenis"];
$sqlRegistros = mysqli_query($conexao,"select tipo,marca,modelo,tamanho,cor,data_lancamento,cadarco,ocasiao,quantidade from bdtenis") or die ("Erro na execusão do contato" . mysqli_error($conexao));


    $dados = mysqli_fetch_array($sqlRegistros);
    $tipo = $dados["tipo"];
    $marca = $dados["marca"];
    $modelo = $dados["modelo"];
    $tamanho = $dados["tamanho"];
    $cor = $dados["cor"];
    $data_lancamento = $dados["data_lancamento"];
    $cadarco = $dados["cadarco"];
    $ocasiao = $dados["ocasiao"];
    $quantidade = $dados["quantidade"];

    // ------------------



   
?>

<!doctype html>
<html>
<head><meta charset="utf-8">
<title>Editar Produto</title>
</head>
<body>
<form name="edTenis" method="post" action="editaT.php" align="center">

    <input type="hidden" name="idTenis" value="<?php echo $idTenis;?>"> 

         <?php
        $rTenis = mysqli_query($conexao,"select * from bdTenis WHERE idTenis = $idTenis");
        $linhas = mysqli_num_rows($rTenis);
        for($i=0;$i<$linhas;$i++){
        $dados = mysqli_fetch_array($rTenis);
        $tipo = $dados["tipo"];
        $marca = $dados["marca"];
        $modelo = $dados["modelo"];
        $tamanho = $dados["tamanho"];
        $cor = $dados["cor"];
        $data_lancamento = $dados["data_lancamento"];
        $cadarco = $dados["cadarco"];
        $ocasiao = $dados["ocasiao"];
        $quantidade = $dados["quantidade"];
        }
        ?>

    <form class=edita action="editaT.php" method="post">

        <label> marca:</label>
        <input type="text" name="marca" value="<?php echo $marca; ?>">
        <br>
    
        <label> modelo:</label>
        <input type="text" name="modelo" value="<?php echo $modelo; ?>">
        <br>
        <label> tamanho:</label>
        <input type="text" name="tamanho" value="<?php echo $tamanho; ?>">
        <br>
        <label> cor:</label>
        <input type="text" name="cor" value="<?php echo $cor; ?>">
        <br>
        <label> data_lancamento:</label>
        <input type="date" name="data_lancamento" value="<?php echo $data_lancamento; ?>">
        <br>
        <label> cadarco:</label>
        <input type="date" name="cadarco" value="<?php echo $cadarco; ?>">
        <br>
        <label> ocasiao:</label>
        <input type="text" name="ocasiao" value="<?php echo $ocasiao; ?>">
        <br>
        <label> quantidade:</label>
        <input type="text" name="quantidade" value="<?php echo $quantidade; ?>">

 


        <input type="submit" name="atualizar-tenis" id="atualizar-tenis" value="Atualizar">

    </form>
</body>
</html>
