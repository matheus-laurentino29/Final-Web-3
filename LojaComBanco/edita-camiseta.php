<?php
include("Produtos/Conexao.php");


$idCamiseta = $_GET["idCamiseta"];
$sqlRegistros = mysqli_query($conexao,"select tipo,marca,modelo,tamanho,cor,data_lancamento,ocasiao,manga,estampa,quantidade from bdcamiseta") or die ("Erro na execusão do contato" . mysqli_error($conexao));


    $dados = mysqli_fetch_array($sqlRegistros);
    $tipo = $dados["tipo"];
    $marca = $dados["marca"];
    $modelo = $dados["modelo"];
    $tamanho = $dados["tamanho"];
    $cor = $dados["cor"];
    $data_lancamento = $dados["data_lancamento"];
    $ocasiao = $dados["ocasiao"];
    $manga = $dados["manga"];
    $estampa = $dados["estampa"];
    $quantidade = $dados["quantidade"];

    // ------------------



   
?>

<!doctype html>
<html>
<head><meta charset="utf-8">
<title>Editar Produto</title>
</head>
<body>
<form name="edCamiseta" method="post" action="editaC.php" align="center">

    <input type="hidden" name="idCamiseta" value="<?php echo $idCamiseta;?>"> 

         <?php
        $rCamiseta = mysqli_query($conexao,"select * from bdCamiseta WHERE idCamiseta = $idCamiseta");
        $linhas = mysqli_num_rows($rCamiseta);
        for($i=0;$i<$linhas;$i++){
        $dados = mysqli_fetch_array($rCamiseta);
        $tipo = $dados["tipo"];
        $marca = $dados["marca"];
        $modelo = $dados["modelo"];
        $tamanho = $dados["tamanho"];
        $cor = $dados["cor"];
        $data_lancamento = $dados["data_lancamento"];
        $ocasiao = $dados["ocasiao"];
        $manga = $dados["manga"];
        $estampa = $dados["estampa"];
        $quantidade = $dados["quantidade"];
        }
        ?>

    <form class=edita action="editaC.php" method="post">

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
        <label> ocasiao:</label>
        <input type="text" name="ocasiao" value="<?php echo $ocasiao; ?>">
        <br>
        <label> manga:</label>
        <input type="text" name="manga" value="<?php echo $manga; ?>">
        <br>
        <label> estampa:</label>
        <input type="text" name="estampa" value="<?php echo $estampa; ?>">
        <br>
        <label> quantidade:</label>
        <input type="text" name="quantidade" value="<?php echo $quantidade; ?>">

 


        <input type="submit" name="atualizar-camiseta" id="atualizar-camiseta" value="Atualizar">

    </form>
</body>
</html>
