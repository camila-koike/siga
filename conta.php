<?php
  
    session_start();
    if(isset($_SESSION['id_user'])){
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
        <h1>Sistema Acadêmico - Conta</h1>
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
            <?php
                require_once("conexao.php");
                $sql = "SELECT * FROM usuarios WHERE id =:id";
                $consulta = $pdo->prepare($sql);
                $consulta->bindParam(':id', $id_user);
                $consulta->execute();
                $resultado = $consulta->fetchAll();
            ?>
            
            <form method="post" action="salvar.php" enctype="multipart/form-data">
            <div class="perfil">
            <h2>Editar Conta</h2>
                <img src="fotos/<?= $resultado[0]['foto'] ?>" id="imgFoto" alt="foto Perfil"><br>
            
                <p>Foto:
                    <input type="file" name="foto" onchange="previewFoto(); " id="fileFoto" >
                </p>
                <p>Nome:
                    <input type="text" value="<?= $resultado[0]['nome'] ?>" name="nome" placeholder="nome" required>
                </p>
                <p>Email:
                    <input type="email" value="<?= $resultado[0]['email'] ?>"name="email" placeholder="email" required>
                </p>
                <p id="paiSenha1">Senha:
                    <input type="password" value="<?= $resultado[0]['senha'] ?>" id="senha1" placeholder="senha" name="senha" required>
                    <ion-icon onclick="verSenha()" name="eye" id="olho"></ion-icon>
                </p>
                <p id="paiSenha2">Repita a senha:
                    <input onchange="validarSenha()" value="<?= $resultado[0]['senha'] ?>" type="password" id="senha2" required placeholder="repita a senha"
                        maxlength="11">
                    <ion-icon onclick="verSenha2()" name="eye" id="olho2"></ion-icon>
                </p>
               
                <p>CPF (somente números):
                    <input type="tel" placeholder="CPF"  value="<?= $resultado[0]['cpf'] ?>" name="cpf" required>
                </p>
                <p>Data de nascimento (dd/mm/aaaa)
                    <input type="date" required name="dataNasc" value="<?= $resultado[0]['data_nascimento'] ?>">
                </p>

                <button type="submit">Salvar</button>
                </div>
            </form>
                        </main>
    </div>
    <footer>
        <hr>
        <button onclick="history.back(); ">Voltar</button>
        <p>&copy;Todos os direitos reservados;</p>
    </footer>
    <script type="text/javascript">

    function PreviewImage() {
        alert("OK22");
        var foto = new FileReader();//FileREader ->ler arquivo
        foto.readAsDataURL(document.querySelector("#fileFoto").files[0]);

        foto.onload = function (fEvent) {
            document.querySelector("#imgFoto").src = fEvent.target.result;
        };
    };

    function previewFoto() {
        var foto = new FileReader();//FileREader ->ler arquivo file da foto
        foto.readAsDataURL(document.querySelector("#fileFoto").files[0]);
        foto.onload = function (fEvent) {
        document.querySelector("#imgFoto").src = fEvent.target.result;
        };
    };

</script>
    <script>
        var olhoc = 1;
        var olhoc2 = 1;
        var olhoc3 = 1;
        function verSenha(){
            var senha1 = document.querySelector("#senha1")
            var olho = document.querySelector("#olho")
            if(olhoc%2 == 0){
                senha1.type = 'password'
                olho.setAttribute('name', 'eye');
            }
            else{
                senha1.type = 'text'
                olho.setAttribute('name', 'eye-off');
            }
            olhoc++;
        }

        function verSenha2(){
            var senha1 = document.querySelector("#senha2")
            var olho = document.querySelector("#olho2")
            if(olhoc2%2 == 0){
                senha1.type = 'password'
                olho.setAttribute('name', 'eye');
            }
            else{
                senha1.type = 'text'
                olho.setAttribute('name', 'eye-off');
            }
            olhoc2++;
        }

        function verSenha3(){
            var senha1 = document.querySelector("#senha3")
            var olho = document.querySelector("#olho3")
            if(olhoc3%2 == 0){
                senha1.type = 'password'
                olho.setAttribute('name', 'eye');
            }
            else{
                senha1.type = 'text'
                olho.setAttribute('name', 'eye-off');
            }
            olhoc3++;
        }

        function validarSenha(){
            var senha1 = document.querySelector("#senha1")
            var senha2 = document.querySelector("#senha2")
            var ps1 = document.querySelector("#paiSenha1")
            var ps2 = document.querySelector("#paiSenha2")
            var obj = document.querySelectorAll("p > b")
            if(senha1.value != senha2.value) {
                senha1.style.borderColor='red'
                senha2.style.cssText ='border-color: red'

                if(obj.length == 0){
                    var msg =  document.createElement('b'); 
                    var conteudoNovo = document.createTextNode("*senhas diferentes");
                    msg.appendChild(conteudoNovo); 
                    msg.style.color = "red"
                    msg1 = msg.cloneNode(true)
                    ps2.appendChild(msg)
                    ps1.appendChild(msg1)
                }

            } else {
                senha1.style.borderColor='black'
                senha2.style.cssText ='border-color: black'
                if(obj.length > 0){
                    ps1.removeChild(obj[0])
                    ps2.removeChild(obj[1])
                }
            }
            
        }
    </script>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>

</body>

</html>