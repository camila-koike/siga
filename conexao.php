<?php

    $dsn = "mysql:host=localhost;dbname=siga";
    $username = "root"; 
    $password = "";
    try {
        // Crie uma conexão com o banco de dados usando o PDO
        $pdo = new PDO($dsn, $username, $password);
        // Defina o modo de erro do PDO para lançar exceções em caso de erro
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      } catch(PDOException $e) {
          echo 'ERROR: ' . $e->getMessage();
      }

?>