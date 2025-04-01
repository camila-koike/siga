	<?php
require("conexao.php");
session_start();
    if(isset($_SESSION['id_user']) and isset($_SESSION["user_name"]))
    {
       $id = $_SESSION['id_user'];
 
    }
    else{
      header('location:index.php');
    }
$nome = $_POST["nome"];
$cpf = $_POST["cpf"];
$email = $_POST["email"];
$senha = $_POST["senha"];
$foto = $_FILES["foto"];
$dataNasc = $_POST["dataNasc"];
echo $nome;
echo $cpf;
echo $email;
print_r($foto);
echo $dataNasc;

$novo_nome = $foto['name'];

if (isset($foto)) {
    $nome_foto = explode(".", $foto['name']);
    print_r($nome_foto);
    $extensao = strtolower(end($nome_foto));


    $novo_nome = md5(time()) . "." . $extensao;
    move_uploaded_file($foto['tmp_name'], "fotos/" . $novo_nome);
}
try {
    $sql = "UPDATE usuarios SET nome=:n, email=:e, senha=:senha, foto=:novo_nome, cpf=:cpf, data_nascimento=:data_nas WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':n', $nome);
    $stmt->bindParam(':e', $email);
    $stmt->bindParam(':senha', $senha);
    $stmt->bindParam(':novo_nome', $novo_nome);
    $stmt->bindParam(':cpf', $cpf);
    $stmt->bindParam(':data_nas', $dataNasc);
    $stmt->bindParam(':id', $id);
    $insercao_bem_sucedida = $stmt->execute();

    $ultimo_id = $pdo->lastInsertId();

    if ($insercao_bem_sucedida) {
        $_SESSION["user_name"] = $nome;
       $_SESSION['foto_user'] = $novo_nome;
       echo "<script> alert('cadastro atualizado com sucesso'); location.href='conta.php'; </script>";
    } else {
        echo "<script> alert('Não foi possível cadastrar. Consulte o suporte'); location.href='index.php'; </script>";
    }
} catch (PDOException $e) {
    echo "Erro na inserção: " . $e->getMessage();
}


?>