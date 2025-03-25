<?php
    require_once("conexao.php");
    $id_disc = $_GET['id_disciplina'];
    $id_user = $_GET['id_user'];

    $query = "INSERT INTO `matricula_se`(`fk_disciplinas_id`, `fk_estudantes_fk_usuarios_id`, `n1`, `n2`, `media`, `faltas`, `situacao`) VALUES (:id_d,:id_u,0,0,0,NULL,'EM CURSO')";

    $insert = $pdo->prepare($query);
    $insert->bindParam(":id_d", $id_disc);
    $insert->bindParam(":id_u", $id_user);
    $resultado = $insert->execute();
    if($resultado){
        echo '<script> alert("matricula realizada"); location.href= "disciplina.php";</script>';
    }
    


?>