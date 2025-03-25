
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Jogo da Velha</title>
  <link rel="stylesheet" type="text/css" href="css/estilo.css">
  <link rel="stylesheet" type="text/css" href="css/estiloJogo.css">

</head>

<body>
  <header>
    <h1 onclick="this.innerText='Exemplo JS'">Sistema Acadêmico</h1>
  </header>
  <hr>
  <div class="content">
    <nav>
    <div class="perfil">
                <img src="fotos/b93dcc21a7dbdb53853273dc5d39ee99.jpg" alt="foto Perfil"><br>
                <a href="#">conta</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="#">sair</a>
            </div>
            <ul>
             <li><a href="home.php">Home</a></li>
             <li><a href="biblioteca.php">Biblioteca</a></li>
             <li><a href="disciplinas.php">Disciplinas</a></li>          
             <li><a href="boletim.php">Boletim</a></li>
             <li><a href="jogovelha.php">Jogar</a></li>
         </ul>
    </nav>

    <main >
      <h1>Vamos Jogar uma Partida</h1>
      <form id="fleex">
        <div style="padding: 5px;">
          Player 1:<input type="text" data-player1 >
        </div>
        <div style="padding: 5px;"> Player 2:<input type="text" data-player2 >
        </div>        
        <button type="submit"  style="visibility:hidden" id="save">Save</button>
      </form>
      <button onclick="jogar()" style="margin: auto 20%;">Jogar</button>

      <div data-jogo class="oculto">
        <div class="tabuleiro xis " data-tabuleiro>
          <div class="celula " onClick="joga(event); "></div>
          <div class="celula " onclick="joga(event); "></div>
          <div class="celula" onclick="joga(event); "></div>
          <div class="celula" onclick="joga(event); "></div>
          <div class="celula" onclick="joga(event); "></div>
          <div class="celula" onclick="joga(event); "></div>
          <div class="celula" onclick="joga(event); "></div>
          <div class="celula" onclick="joga(event); "></div>
          <div class="celula" onclick="joga(event); "></div>
        </div>
        <div id="vencedor"></div>
        <div style="text-align: center;">
          <button onclick="location.reload();">Reset</button>
        </div>
      </div>
    </main>
  </div>
  <footer>
    <hr>
    <p>&copy;Todos os direitos reservados;</p>
  </footer>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="js/jogoProf.js">

  </script>
</body>

</html>