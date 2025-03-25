<?php
    require_once('conexao.php');
    $query = 'DELETE FROM disciplinas WHERE id = :id_disciplina';
    $id_d = $_GET['id_disciplina'];
    $delete = $pdo->prepare( $query);
    $delete->bindParam(':id_disciplina', $id_d);
    $delete->execute();
    header("location:disciplina.php");

?>