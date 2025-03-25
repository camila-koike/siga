
<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset='utf-8'>
	<title>Meu SIGA</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>

<body>
	<header>
		<h1>Sistema Acadêmico - Biblioteca</h1>
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

			<h2 class="outstanding-title">Biblioteca</h2>
			<p>As Bibliotecas do IFMS são responsáveis por promover e disseminar o acesso à informação, apoiando as
				atividades de ensino, pesquisa, extensão e inovação no IFMS.
			</p>

			<b>Acervo</b>

			<b>Buscar publicações (livros, revistas, artigos, etc.) no acervo físico</b>
			<ul>
				<li><a href="http://biblioteca.ifms.edu.br/pergamum/biblioteca/index.php"
					title="Catálogo online - Pergamum" target="_blank">Catálogo online (Sistema Pergamum)</a></li>
				</ul>

				<b>Bibliotecas virtuais</b>
				<ul>
					<li><a href="/matricula/logar-bv-pearson" title="BVPearson" target="_blank">BV-Pearson</a></li>
				</ul>


				<b>Periódicos</b>
				<ul>
					<li><a href="http://www-periodicos-capes-gov-br.ez365.periodicos.capes.gov.br/index.php"
						title="Minha Biblioteca" target="_blank">Periódicos Capes</a>: publicações científicas nacionais
					e internacionais de todas as áreas do conhecimento.</li>
				</ul>


				<b>Regulamento</b>
				<p>
					<a href="http://www.ifms.edu.br/centrais-de-conteudo/documentos-institucionais/regulamentos/regulamento-da-biblioteca.pdf"
					target="_blank" title="Regulamento da biblioteca">Regulamento da biblioteca</a>
				</p>

				Caso ocorra alguma inconsistência favor procurar a Central de Relacionamento (CEREL) do seu campus.
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
	</body>

	</html>