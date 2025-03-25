

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset='utf-8'>
    <title>Meu SIGA</title>
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>

<body>
    <header>
        <h1>Sistema Acadêmico - boletim</h1>
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

            <table>
                <tbody>
                    <tr>
                        <th>Estudante:</th>
                        <td>Camila</td>
                        <th>RA:</th>
                        <td>5555</td>
                    </tr>

                </tbody>
            </table>
            <table>
                <tbody>
                    <tr>
                        <th>Unidade Curricular</th>
                        <th>CH</th>
                        <th>Aulas</th>
                        <th>Total Faltas</th>
                        <th>% Faltas</th>
                        <th>N1</th>
                        <th>N2</th>
                        <th>Média</th>
                        <th>Situação</th>
                        <th>Opções</th>
                    </tr>
                                        <tr>
                        <td>EXEMPLO Dispositivos Móveis<br><small>Túlio</small></td>
                        <td>80</td>
                        <td>100</td>
                        <td>25</td>
                        <td>25%</td>
                        <td>5</td>
                        <td>5</td>
                        <td>5</td>
                        <td>REPROVADO</td>
                        <td><ion-icon name="trash"></ion-icon></td>
                    </tr>

                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="10">
                            <small><strong>Legenda:</strong><br>
                                <small><strong>CH/Aulas: </strong>Carga horária da Unidade Curricular em horas /
                                    Quantidade de aulas ou encontros presenciais previstos.</small></small>
                            <p>*Esses registros podem sofrer alterações até o final do periodo letivo.</p>
                        </td>
                    </tr>

                </tfoot>
            </table>

        </main>
    </div>
    <a href="#">
        <img src="imagens/seta_verde.png" id="irTopo" alt="seta p cima">
    </a>
    <footer>
        <hr>
        <!--quando eu clico  eu navego para a página de anterior que eu estava-->
        <button onclick="history.back(); ">Voltar</button>
        <p>&copy;Todos os direitos reservados;</p>
    </footer>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
</body>

</html>