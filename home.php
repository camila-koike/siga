<?php
  
    session_start();
    if(isset($_SESSION['id_user'])){
        $nome = $_SESSION['nome'];
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body style="margin: 0;">
    <a href="#">
        <img src="imagens/seta_verde.png" id="irTopo" alt="seta p cima">
    </a>
    <header>
        <h1 onclick="this.innerText='Exemplo JS'">Sistema Acadêmico</h1>
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
                <li><a href="disciplina.php">Disciplinas</a></li>
                <li><a href="boletim.php">Boletim</a></li>
                <li><a href="jogovelha.php">Jogar</a></li>
            </ul>
        </nav>

        <main>
            <h2>Olá, <?php   echo $nome;        
        ?></h2>
            <p>Prezado(a) <?php echo $nome;  ?>,</p>
            <p>A partir de agora você passará a ter acesso aos seus dados no Sistema Acadêmico do IFMS.</p>
            <p>Essa é a segunda de várias etapas que virão. A primeira foi o acesso ao boletim, agora, nesta fase você
                poderá consultar em tempo real quais as unidades que está matriculado no semestre, ver horários de aula
                e permanência, bem como acessar notas e faltas, além do boletim.</p>
            <p>Se você está fazendo mais de um curso no IFMS poderá alternar entre suas diferentes matrículas no canto
                superior esquerdo da tela, abaixo do texto “Sistema Acadêmico”.</p>
            <p>No menu "<a href='disciplinas.html' class="">Disciplinas</a>" você verá a relação de todas as unidades
                que está matriculado no semestre atual. Clicando sobre o nome de cada uma, você verá os horários de
                permanência do(a) professor(a) e os horários e locais de aula.</p>
            <p>No menu "<a href='notas.html' class="">Notas</a>" você conseguirá visualizar todas as notas já lançadas,
                tanto das unidades atuais quanto daquelas de semestres anteriores e a quantidade de faltas em cada uma
                delas</p>
            <p>Já em "<a href='boletim.html' class="">Boletim</a>" você conseguirá verificar, além de sua nota, o número
                de faltas e o percentual que elas representam. Lembre-se que deve ter pelo menos 75% de frequência.</p>
            <p>Em um futuro próximo, novas funcionalidades serão disponibilizadas na Área do Estudante, como solicitação
                de rematrícula, acesso ao plano de ensino do professor, à matriz curricular do curso, gerar atestado de
                matrícula, acesso ao histórico escolar, entre outras.</p>
            <p>Fique à vontade para dar sugestões para melhoria desse espaço.</p>
            <p>Aproveitem!</p>
            <p>Pró-Reitoria de Ensino e Reitoria</p>
        </main>
        <section>
            <h2>Últimas notícias</h2>
            <p>Aberto processo seletivo</p>
        </section>
    </div>
    <footer>
        <hr>
        <p>&copy;Todos os direitos reservados;</p>
    </footer>
</body>

</html>