<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <title>Página Inicial</title>
</head>

<body>
        <div class="container">
            <div class="jumbotron">
                <div class="row">
                    <h2>LauJohns Enterprise </h2>
                </div>
            </div>
                <br>
                <div class="row">
                    <br>
                    <h3>Camisetas</h3>
                    <p>
                        <a href="cadastroCamiseta.html" class="btn btn-success">Adicionar</a>
                    </p>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">marca</th>
                                <th scope="col">modelo</th>
                                <th scope="col">tamanho</th>
                                <th scope="col">cor</th>
                                <th scope="col">data_lancamento</th>
                                <th scope="col">ocasiao</th>
                                <th scope="col">manga</th>
                                <th scope="col">estampa</th>
                                <th scope="col">quantidade</th>
                                
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
                                echo '<a class="btn btn-danger" href="excluircamiseta.php?idCamiseta='.$row['idCamiseta'].'">Excluir</a>';
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
                    <table class="table table-striped">
                    <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">marca</th>
                                <th scope="col">modelo</th>
                                <th scope="col">tamanho</th>
                                <th scope="col">cor</th>
                                <th scope="col">data_lancamento</th>
                                <th scope="col">ocasiao</th>
                                <th scope="col">quantidade</th>
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
                                echo '<a class="btn btn-danger" href="excluirshort.php?idShort='.$row['idShort'].'">Excluir</a>';
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
                    <table class="table table-striped">
                    <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">marca</th>
                                <th scope="col">modelo</th>
                                <th scope="col">tamanho</th>
                                <th scope="col">cor</th>
                                <th scope="col">lancamento</th>
                                <th scope="col">ocasiao</th>
                                <th scope="col">cadarço</th>
                                <th scope="col">quantidade</th>
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
                                echo '<a class="btn btn-danger" href="excluirtenis.php?idTenis='.$row['idTenis'].'">Excluir</a>';
                                echo '</td>';
                                echo '</tr>';
                            }
                            Conexao::desconectar();
                            ?>
                            
                        </tbody>
                    </table>
                </div>
                            
                 

        </div>
		 
</body>

</html>