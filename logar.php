<?php
$email = $_POST['email'];
echo $email;
$senha = $_POST['senha'];
echo '<br>'. $senha;
require("conexao.php");
$sql = "SELECT * FROM usuarios WHERE email = :l AND senha = :s";
$consulta = $pdo->prepare($sql);
$consulta->bindParam(":l", $email);
$consulta->bindParam(":s", $senha);
$consulta->execute();

$resultado = $consulta->fetchAll();

if(count($resultado)==1){
    session_start();
    $_SESSION['nome'] = $resultado[0]['nome'];
    $_SESSION['id_user'] = $resultado[0]['id'];   
    echo '<script>';
    echo "location.href='home.php';";
    echo "</script>";
}else{
    echo '<script>';
    echo "location.href='index.php';";
    echo 'alert("Email ou senha incorreto")';
    echo "</script>";
}


?>