<?php
  
    session_start();
    if(isset($_SESSION['id_user'])){
        $nome = $_SESSION['nome'];
        $id_user = $_SESSION['id_user'];
    }else{
        header('location:index.php');
    } 

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset='utf-8'>
    <title>Meu SIGA</title>
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>

<body>
    <a href="#">
        <img src="imagens/seta_verde.png" id="irTopo" alt="seta p cima">
    </a>
    <header>
        <h1>Sistema Acadêmico - Disciplinas</h1>
    </header>
    <hr>
    <div class="content">
        <nav>
            <div class="perfil">
                <img src="fotos/b93dcc21a7dbdb53853273dc5d39ee99.jpg" alt="foto Perfil"><br>
                <a href="conta.php">conta</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="deslogar.php">sair</a>
            </div>
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="biblioteca.php">Biblioteca</a></li>
                <li><a href="disciplinas.php">Disciplinas</a></li>
                <li><a href="boletim.php">Boletim</a></li>
                <li><a href="jogovelha.php">Jogar</a></li>
            </ul>
        </nav>

        <main>
            <h2>Disciplinas</h2>
            <h3>1º Período</h3>
            <table>
                <tr>
                    <th>Disciplina</th>
                    <th>Turno</th>
                    <th>Total Aulas</th>
                    <th>Carga horária</th>
                    <th>Curso</th>
                    <th>Professor</th>
                    <th>Opções</th>
                </tr>
                <?php
                $query = "SELECT * FROM `disciplinas` WHERE periodo = 1;";
                require_once('conexao.php');
                $consulta = $pdo->prepare($query);
                $consulta->execute();
                $results = $consulta->fetchAll(PDO::FETCH_ASSOC);
                print_r($results);
                for ($i = 0; $i < count($results); $i++) {
                    ?>
                    <tr>
                        <td><?php echo $results[$i]['nome']; ?></td>
                        <td><?= $results[$i]['turno'];?></td>
                        <td>80</td>
                        <td>60</td>
                        <td>PROEJA-Informática para Internet</td>
                        <td>Aurelio Junior</td>
                        <td><button
                                onclick="location.href='matricular.php?id_disciplina=<?= $results[$i]['id'];?>&id_user=<?= $id_user?>'">Matricular-se</button>
                            <a href="excluirDisciplina.php?id_disciplina=<?= $results[$i]['id'];?>"><ion-icon name="trash"></ion-icon></a>
                        </td>
                    </tr>
                <?php } ?>



            </table>
            <h3>2º Período</h3>
            <table>
                <tr>
                    <th>Disciplina</th>
                    <th>Turno</th>
                    <th>Total Aulas</th>
                    <th>Carga horária</th>
                    <th>Curso</th>
                    <th>Professor</th>
                    <th>Opções</th>
                </tr>

                <tr>
                    <td>Disciplinas período 2</td>
                    <td>Matutino</td>
                    <td>4</td>
                    <td>90</td>
                    <td>Técnico em Informática</td>
                    <td>Joelson</td>
                    <td>
                        <button>Matricular-se</button>
                        <ion-icon name="trash"></ion-icon>
                    </td>
                </tr>
                <tr>
                    <td>Disciplinas período 2</td>
                    <td>Matutino</td>
                    <td>4</td>
                    <td>90</td>
                    <td>Técnico em Informática</td>
                    <td>Joelson</td>
                    <td>
                        <button>Matricular-se</button>
                        <ion-icon name="trash"></ion-icon>
                    </td>
                </tr>
            </table>
            <h3>3º Período</h3>
            <table>
                <tr>
                    <th>Disciplina</th>
                    <th>Turno</th>
                    <th>Total Aulas</th>
                    <th>Carga horária</th>
                    <th>Curso</th>
                    <th>Professor</th>
                    <th>Opções</th>
                </tr>
                <tr>
                    <td>Disciplinas período 3</td>
                    <td>Matutino</td>
                    <td>4</td>
                    <td>90</td>
                    <td>Técnico em Informática</td>
                    <td>Joelson</td>
                    <td>
                        <button>Matricular-se</button>
                        <ion-icon name="trash"></ion-icon>
                    </td>
                </tr>
                <tr>
                    <td>Disciplinas período 3</td>
                    <td>Matutino</td>
                    <td>4</td>
                    <td>90</td>
                    <td>Técnico em Informática</td>
                    <td>Joelson</td>
                    <td>
                        <button>Matricular-se</button>
                        <ion-icon name="trash"></ion-icon>
                    </td>
                </tr>
            </table>

        </main>
    </div>
    <footer>
        <hr>
        <button onclick="history.back(); ">Voltar</button>
        <p>&copy;Todos os direitos reservados;</p>
    </footer>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>

</body>

</html>