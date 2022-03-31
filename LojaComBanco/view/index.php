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
            <a class="py-2 d-none d-md-inline-block" href="#"> </a>
            <a class="py-2" href="#">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="WHITE" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="d-block mx-auto"><circle cx="12" cy="12" r="10"></circle><line x1="14.31" y1="8" x2="20.05" y2="17.94"></line><line x1="9.69" y1="8" x2="21.17" y2="8"></line><line x1="7.38" y1="12" x2="13.12" y2="2.06"></line><line x1="9.69" y1="16" x2="3.95" y2="6.06"></line><line x1="14.31" y1="16" x2="2.83" y2="16"></line><line x1="16.62" y1="12" x2="10.88" y2="21.94"></line></svg>
            </a>
            <a class="py-2 d-none d-md-inline-block" href="#"> </a>
        </div>
    </nav>

    <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-white">

        <div class="col-md-5 p-lg-5 mx-auto my-5">
            <h1 class="display-5 font-weight-normal">LauJohns Enterprise</h1>
            <p class="lead font-weight-normal">O site com banco de dados perfeito para ser usado em sua loja com a finalidade de gerenciar os produtos dela.</p>
        </div>

        <div class="product-device shadow-sm d-none d-md-block"></div>
        <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>

    </div>

        <div class="container">
            <div class="jumbotron">
            </div>
            <hr size="5">

                <br>
                <!------------------------------------------div 1------------------------------------------>
                <div class="row">
                    <br>
                    <h3 align="center">Estoque de Camisetas</h3>
                        <br>
                        <br>
                        <br>

                    <table class="table table-bordered">

                        <thead class="table-secondary">
                            <tr class="border border-4">
                                <th scope="col"style="text-align:center">Id</th >
                                <th scope="col"style="text-align:center">Marca</th>
                                <th scope="col" style="text-align:center">Modelo</th>
                                <th scope="col"style="text-align:center">Tamanho</th>
                                <th scope="col"style="text-align:center">Cor</th>
                                <th scope="col"style="text-align:center">Data de fabricação</th>
                                <th scope="col"style="text-align:center">Ocasiao</th>
                                <th scope="col"style="text-align:center">Manga</th>
                                <th scope="col"style="text-align:center">Estampa</th>
                                <th scope="col"style="text-align:center">Quantidade</th>
                                <th scope="col" style="text-align:center">Opções</th>            
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                            require_once '../controller/Conexao.php';
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
                                echo '<p align="center"> <a class="button button3" href="../model/excluircamiseta.php?idCamiseta='.$row['idCamiseta'].'" >Excluir</a>' . "   " 
                                . '<a class="button button2" href="edita-camiseta.php?idCamiseta='.$row['idCamiseta'].'">Editar</a> </p>';
                                echo '</td>';
                                echo '</tr>';
                            }
                            Conexao::desconectar();
                            ?>
                        </tbody>

                    </table>

                    <p align="center"> 
                    <a href="cadastroCamiseta.html" class="button button1"> Adiconar ao estoque</a>
                    </p>
                    
                </div>

            <hr size="5">
                
                <!------------------------------------------div 2------------------------------------------>
                <div class="row">
                    <br>
                    <h3 align="center">Estoque de Shorts</h3>
                        <br>
                        <br>
                        <br>

                    <table class="table table-bordered">

                        <thead class = "table-secondary">
                            <tr class="border border-4">
                            <th scope="col"style="text-align:center">Id</th >
                                <th scope="col"style="text-align:center">Marca</th>
                                <th scope="col" style="text-align:center">Modelo</th>
                                <th scope="col"style="text-align:center">Tamanho</th>
                                <th scope="col"style="text-align:center">Cor</th>
                                <th scope="col"style="text-align:center">Data de fabricação</th>
                                <th scope="col"style="text-align:center">Ocasiao</th>
                                <th scope="col"style="text-align:center">Quantidade</th>
                                <th scope="col" style="text-align:center">Opções</th>    

                            </tr>
                        </thead>

                        <tbody>
                            <?php
                            require_once '../controller/Conexao.php';
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
                                echo ' <p align="center"> <a class="button button3" href="../model/excluirshort.php?idShort='.$row['idShort'].'">Excluir</a>' . '     
                                    <a class="button button2" href="edita-shorts.php?idShort='.$row['idShort'].'">Editar</a> </p>';
                                echo '</td>';
                                echo '</tr>';
                            }
                            Conexao::desconectar();
                            ?>
                        </tbody>
                        
                    </table>

                    <p align="center"> 
                    <a href="cadastroShort.html" class="button button1"> Adiconar ao estoque</a>
                    </p>
                    <br>
                    <br>
                </div>

            <hr size="5">
                
                <!------------------------------------------div 3------------------------------------------>
                <div class="row">
                    <br>
                    <h3 align="center">Estoque de Tênis</h3>
                        <br>
                        <br>
                        <br>

                    <table class="table table-bordered">

                        <thead class="table-secondary">
                            <tr class="border border-4">
                            <th scope="col"style="text-align:center">Id</th >
                                <th scope="col"style="text-align:center">Marca</th>
                                <th scope="col" style="text-align:center">Modelo</th>
                                <th scope="col"style="text-align:center">Tamanho</th>
                                <th scope="col"style="text-align:center">Cor</th>
                                <th scope="col"style="text-align:center">Data de fabricação</th>
                                <th scope="col"style="text-align:center">Ocasiao</th>
                                <th scope="col"style="text-align:center">Cadarço</th>
                                <th scope="col"style="text-align:center">Quantidade</th>
                                <th scope="col" style="text-align:center">Opções</th>    

                            </tr>
                        </thead>

                        <tbody>
                            <?php
                            require_once '../controller/Conexao.php';
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
                                echo '<p align="center"> <a class="button button3" href="../model/excluirtenis.php?idTenis='.$row['idTenis'].'">Excluir</a>' . '     
                                <a class="button button2" href="edita-tenis.php?idTenis='.$row['idTenis'].'">Editar</a>';
                                echo '</td>';
                                echo '</tr>';
                            }
                            Conexao::desconectar();
                            ?>
                            
                        </tbody>

                    </table>
                   
                    <p align="center"> 
                    <a href="cadastroTenis.html" class="button button1"> Adiconar ao estoque</a>
                    </p>
                </div>
                            
            <hr size="5">


        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>