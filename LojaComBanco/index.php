<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">    <title>Página Inicial</title>
    <link rel="stylesheet" type="text/css" href="estilizacao.css" media="screen" />
    
</head>

<body> 
    <nav class="site-header sticky-top py-1">
        <div class="container d-flex flex-column flex-md-row justify-content-between">
            <a class="py-2" href="#">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="d-block mx-auto"><circle cx="12" cy="12" r="10"></circle><line x1="14.31" y1="8" x2="20.05" y2="17.94"></line><line x1="9.69" y1="8" x2="21.17" y2="8"></line><line x1="7.38" y1="12" x2="13.12" y2="2.06"></line><line x1="9.69" y1="16" x2="3.95" y2="6.06"></line><line x1="14.31" y1="16" x2="2.83" y2="16"></line><line x1="16.62" y1="12" x2="10.88" y2="21.94"></line></svg>
            </a>
            <a class="py-2 d-none d-md-inline-block" href="#">Tour</a>
            <a class="py-2 d-none d-md-inline-block" href="#">Produto</a>
            <a class="py-2 d-none d-md-inline-block" href="#">Features</a>
            <a class="py-2 d-none d-md-inline-block" href="#">Premium</a>
            <a class="py-2 d-none d-md-inline-block" href="#">Suporte</a>
            <a class="py-2 d-none d-md-inline-block" href="#">Preços</a>
            <a class="py-2 d-none d-md-inline-block" href="#">Carrinho</a>
        </div>
    </nav>

    <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
      <div class="col-md-5 p-lg-5 mx-auto my-5">
        <h1 class="display-5 font-weight-normal">LauJohns Enterprise</h1>
        <p class="lead font-weight-normal">E uma descrição engraçadinha, para continuar. Alavanque seus esforços em marketing com esse exemplo, baseado nas páginas de marketing da Apple.</p>
        <a class="btn btn-outline-secondary" href="#">Em breve</a>
      </div>
      <div class="product-device shadow-sm d-none d-md-block"></div>
      <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
    </div>
        <div class="container">
            <div class="jumbotron">
            </div>
                <br>
                <div class="row">
                    <br>
                    <h3>Camisetas</h3>
                    <p>
                        <a href="cadastroCamiseta.html" class="btn btn-success">Adicionar</a>
                    </p>
                    <table class="table table-bordered">
                        <thead class="table-secondary">
                            <tr class="border border-4">
                                <th scope="col"style="text-align:center">Id</th >
                                <th scope="col"style="text-align:center">marca</th>
                                <th scope="col" style="text-align:center">modelo</th>
                                <th scope="col"style="text-align:center">tamanho</th>
                                <th scope="col"style="text-align:center">cor</th>
                                <th scope="col"style="text-align:center">data_lancamento</th>
                                <th scope="col"style="text-align:center">ocasiao</th>
                                <th scope="col"style="text-align:center">manga</th>
                                <th scope="col"style="text-align:center">estampa</th>
                                <th scope="col"style="text-align:center">quantidade</th>
                                <th scope="col" style="text-align:center">Opções</th>
                                                          
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            require_once 'Produtos/Conexao.php';
                            $pdo = Conexao::conectar();
                            $sql = 'SELECT * FROM bdCamiseta ORDER BY idCamiseta';
                            foreach($pdo->query($sql)as $row)
                            {
                                echo '<tr>';
                                echo '<th scope="row">'. $row['idCamiseta'] . '</th>';
                                echo '<td>'. $row['marca'] . '</td>';
                                echo '<td>'. $row['modelo'] . '</td>';
                                echo '<td>'. $row['tamanho'] . '</td>';
                                echo '<td>'. $row['cor'] . '</td>';
                                echo '<td>'. $row['data_lancamento'] . '</td>';
                                echo '<td>'. $row['ocasiao'] . '</td>';
                                echo '<td>'. $row['manga'] . '</td>';
                                echo '<td>'. $row['estampa'] . '</td>';
                                echo '<td>'. $row['quantidade'] . '</td>';
                                

                                echo '<td width=250>';
                                echo '<p align="center"> <a class="btn btn-danger" href="excluircamiseta.php?idCamiseta='.$row['idCamiseta'].'" >Excluir</a>' . "   " 
                                . '<a class="btn btn-warning" href="edita-camiseta.php?idCamiseta='.$row['idCamiseta'].'">Editar</a> </p>';
                                echo '</td>';
                                echo '</tr>';
                            }
                            Conexao::desconectar();
                            ?>
                        </tbody>
                    </table>
                </div>

                <div class="row">
                    <br>
                    <h3>Shorts</h3>
                    <p>
                        <a href="cadastroShorts.html" class="btn btn-success">Adicionar</a>
                    </p>
                    <table class="table">
                    <thead class = "table-secondary">
                            <tr class="border border-4">
                                <th scope="col"style="text-align:center">Id</th>
                                <th scope="col"style="text-align:center">marca</th>
                                <th scope="col"style="text-align:center">modelo</th>
                                <th scope="col"style="text-align:center">tamanho</th>
                                <th scope="col"style="text-align:center">cor</th>
                                <th scope="col"style="text-align:center">data_lancamento</th>
                                <th scope="col"style="text-align:center">ocasiao</th>
                                <th scope="col"style="text-align:center">quantidade</th>
                                <th scope="col" style="text-align:center">Opções</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            require_once 'Produtos/Conexao.php';
                            $pdo = Conexao::conectar();
                            $sql = 'SELECT * FROM bdShort ORDER BY idShort';
                            foreach($pdo->query($sql)as $row)
                            {
                                echo '<tr>';
                                echo '<th scope="row">'. $row['idShort'] . '</th>';
                                echo '<td>'. $row['marca'] . '</td>';
                                echo '<td>'. $row['modelo'] . '</td>';
                                echo '<td>'. $row['tamanho'] . '</td>';
                                echo '<td>'. $row['cor'] . '</td>';
                                echo '<td>'. $row['data_lancamento'] . '</td>';
                                echo '<td>'. $row['ocasiao'] . '</td>';
                                echo '<td>'. $row['quantidade'] . '</td>';

                                echo '<td width=250>';
                                echo ' <p align="center"> <a class="btn btn-danger" href="excluirshort.php?idShort='.$row['idShort'].'">Excluir</a>' . '     
                                . <a class="btn btn-warning" href="edita-shorts.php?idShort='.$row['idShort'].'">Editar</a> </p>';
                                echo '</td>';
                                echo '</tr>';
                            }
                            Conexao::desconectar();
                            ?>
                        </tbody>
                        
                    </table>
                        <br>
                            <br>
                </div>

                <div class="row">
                    <br>
                    <h3>Tênis</h3>
                    <p>
                        <a href="cadastroTenis.html" class="btn btn-success">Adicionar</a>
                    </p>
                    <table class="table">
                    <thead class="table-secondary">
                            <tr class="border border-4">
                                <th scope="col"style="text-align:center">Id</th>
                                <th scope="col"style="text-align:center">marca</th>
                                <th scope="col"style="text-align:center">modelo</th>
                                <th scope="col"style="text-align:center">tamanho</th>
                                <th scope="col"style="text-align:center">cor</th>
                                <th scope="col"style="text-align:center">lancamento</th>
                                <th scope="col"style="text-align:center">ocasiao</th>
                                <th scope="col"style="text-align:center">cadarço</th>
                                <th scope="col" style="text-align:center">quantidade</th>
                                <th scope="col" style="text-align:center">Opções</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            require_once 'Produtos/Conexao.php';
                            $pdo = Conexao::conectar();
                            $passa = 'c';
                            $sql = 'SELECT * FROM bdTenis ORDER BY idTenis';
                            foreach($pdo->query($sql)as $row)
                            {
                                echo '<tr>';
                                echo '<th scope="row">'. $row['idTenis'] . '</th>';
                                echo '<td>'. $row['marca'] . '</td>';
                                echo '<td>'. $row['modelo'] . '</td>';
                                echo '<td>'. $row['tamanho'] . '</td>';
                                echo '<td>'. $row['cor'] . '</td>';
                                echo '<td>'. $row['data_lancamento'] . '</td>';
                                echo '<td>'. $row['ocasiao'] . '</td>';
                                echo '<td>'. $row['cadarco'] . '</td>';
                                echo '<td>'. $row['quantidade'] . '</td>';

                                echo '<td width=250>';
                                echo '<p align="center"> <a class="btn btn-danger" href="excluirtenis.php?idTenis='.$row['idTenis'].'">Excluir</a>' . '     
                                . <a class="btn btn-warning" href="edita-tenis.php?idTenis='.$row['idTenis'].'">Editar</a>';
                                echo '</td>';
                                echo '</tr>';
                            }
                            Conexao::desconectar();
                            ?>
                            
                        </tbody>
                    </table>
                </div>
                            
                 

        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>