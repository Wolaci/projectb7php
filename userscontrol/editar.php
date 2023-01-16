<?php 
    require 'config.php';
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $id = $_POST['id'];

    $sql = "UPDATE usuarios SET nome='$nome',idade='$idade'
    WHERE id=$id";
    $sql = $pdo->query($sql);
?>