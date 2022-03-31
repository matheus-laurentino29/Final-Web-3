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

?>

<!doctype html>

<html>

<head>

    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="estilizacao.css" media="screen" />
    <title>Editar Produto</title>

</head>

<body class="bg-white">

    <nav class="site-header sticky-top py-1">
        <div class="container d-flex flex-column flex-md-row justify-content-between">
            <a class="py-2 d-none d-md-inline-block" href="#"> </a>
            <a class="py-2" href="index.php">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="WHITE" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="d-block mx-auto"><circle cx="12" cy="12" r="10"></circle><line x1="14.31" y1="8" x2="20.05" y2="17.94"></line><line x1="9.69" y1="8" x2="21.17" y2="8"></line><line x1="7.38" y1="12" x2="13.12" y2="2.06"></line><line x1="9.69" y1="16" x2="3.95" y2="6.06"></line><line x1="14.31" y1="16" x2="2.83" y2="16"></line><line x1="16.62" y1="12" x2="10.88" y2="21.94"></line></svg>
            </a>
            <a class="py-2 d-none d-md-inline-block" href="#"> </a>
        </div>
    </nav>

    <div align="center">

        <div class="col-md-5 p-lg-5 mx-auto my-5">
            <h1 class="display-5 font-weight-normal">LauJohns Enterprise</h1>
            <img class="d-block mx-auto mb-4" src="Imagens/edita.png" alt="" width="72"height="72">
            <p class="lead font-weight-normal"> Faça a edição de seu produto.</p>
        </div>

        <!-- <div class="product-device shadow-sm d-none d-md-block"></div> -->
        <!-- <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div> -->
   
    </div>

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
        
        <div class="col-md-12 order-md-1">

            <form class=edita action="editaC.php" method="post">

                                    <!--Primeira coluna-->

                <div class="row">

                    <div class="col-md-6 mb-3">
                        <input type="hidden" name="tipo" value="c">
                        <label class="font-weight-bold" for="modelo">Modelo</label>
                        <input type="text" class="form-control" id="modelo" name="modelo" value="<?php echo $modelo; ?>">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="font-weight-bold" for="tamanho">Tamanho</label>
                        <select class="custom-select d-block w-100" id="tamanho" name="tamanho" required="">
                            <option value="<?php echo $tamanho;?>"><?php echo $tamanho;?></option>
                            <option value="PP">PP</option>
                            <option value="P">P</option>
                            <option value="M">M</option>
                            <option value="G">G</option>
                            <option value="GG">GG</option>
                        </select>
                    </div>

                </div>

                                    <!--Segunda coluna-->

                <div class="row">

                    <div class="col-md-6 mb-3">
                        <label class="font-weight-bold" for="cor">Cor</label>
                        <input type="text" class="form-control" id="cor" name="cor" value="<?php echo $cor; ?>">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="font-weight-bold" for="marca">Marca</label>
                        <select class="custom-select d-block w-100" id="marca" name="marca" required="">
                            <option value="<?php echo $marca; ?>"><?php echo $marca; ?></option>
                            <option value="Nike">Nike</option>
                            <option value="Adidas">Adidas</option>
                            <option value="Puma">Puma</option>
                            <option value="Lacoste">Lacoste</option>
                        </select>
                    </div>

                </div>

                                    <!--Terceira coluna-->
                
                <div class="row">

                    <div class="col-md-6 mb-3">
                        <label class="font-weight-bold" for="manga">Manga</label>
                        <select class="custom-select d-block w-100" id="manga" name="manga" required="">
                            <option value="<?php echo $manga; ?>"><?php echo $manga; ?></option>
                            <option value="s">Sim</option>
                            <option value="n">Não</option>
                        </select>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="font-weight-bold" for="estampa">Estampa</label>
                        <select class="custom-select d-block w-100" id="estampa" name="estampa" required="">
                            <option value="<?php echo $estampa; ?>"><?php echo $estampa; ?></option>
                            <option value="s">Sim</option>
                            <option value="n">Não</option>
                        </select>
                    </div>

                </div>

                                    <!--Quarta coluna-->

                <div class="row">

                    <div class="col-md-6 mb-3" >
                        <label class="font-weight-bold" for="data_lancamento">Data de lançamento</label>
                        <input type="date" class="form-control" id="data_lancamento" name="data_lancamento" value="<?php echo $data_lancamento; ?>">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="font-weight-bold" for="ocasiao">Ocasião</label>
                        <input type="text" class="form-control" id="ocasiao" name="ocasiao" value="<?php echo $ocasiao; ?>">
                    </div>

                </div>

                                    <!--Quinta coluna-->

                <div class="row">

                    <div class="col-md-6 mb-3" >
                        <label class="font-weight-bold" for="quantidade">Quantidade de itens</label>
                        <input type="int" class="form-control" id="quantidade" name="quantidade" value="<?php echo $quantidade; ?>">
                    </div>

                </div>
            
                <button class="btn btn-primary btn-lg btn-block" type="submit">Atualizar</button>

                <!----------------------------------------------------------------------------------------------->

            </form>

        </div>

    </form>

    <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1"> LauJohns Enterprise</p>
    </footer>

</body>
</html>
