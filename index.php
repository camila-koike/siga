
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset='utf-8'>
    <title>SIGA</title>
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>

<body style="margin: 0;">
    <a href="#">
        <img src="imagens/seta_verde.png" id="irTopo" alt="seta p cima">
    </a>
    <header>
        <h1>Sistema Acadêmico</h1>
        <form id="login" action="logar.php" method="post">
            <input type="email" placeholder="e-mail" name="email">
            <input type="password" placeholder="senha" id="senha3" name="senha">
            <ion-icon onclick="verSenha3()" color='light' name="eye" id="olho3"></ion-icon> 
            <button type="submit">Logar</button>
        </form>
    </header>
    <hr>
    <div class="content">
        <nav>
            <ul>
                <li><a href="http://www.ifms.edu.br/">Site do IFMS</a></li>
            </ul>
        </nav>

        <main>
            <h2>Cadastre-se</h2>

            <form method="post" action="cadastrar.php"  enctype="multipart/form-data">
                <p>Cadastre-se como
                    <select name="perfil">
                        <option value="estudante">Estudante</option>
                        <option value="professor">Professor</option>
                    </select>
                </p>
                <p>Nome:
                    <input type="text" name="nome" placeholder="nome"  required >
                </p>
                <p >Email:
                    <input type="email"  name="email" placeholder="email" required>
                </p>
                <p id="paiSenha1">Senha:
                    <input  type="password" id="senha1" placeholder="senha" name="senha"  required>
                    <ion-icon onclick="verSenha()" name="eye" id="olho"></ion-icon> 
                </p>
                <p id="paiSenha2">Repita a senha:
                    <input onchange="validarSenha()" type="password" id="senha2" required placeholder="repita a senha" maxlength="11" >
                    <ion-icon onclick="verSenha2()" name="eye" id="olho2"></ion-icon> 
                    
                </p>
                <p>Foto:
                    <input type="file" name="foto" >
                </p>
                <p>CPF (somente números):
                    <input type="tel" placeholder="CPF" name="cpf" required >
                </p>
                <p>Data de nascimento (dd/mm/aaaa)
                    <input type="date" required name="dataNasc">
                </p>
                
                <button type="submit">Cadastrar</button>

            </form>
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