<?php 
    require 'config.php';
    $id = $_GET['id'];

    $sql = "DELETE FROM usuarios 
    WHERE id=$id";
    $sql = $pdo->query($sql);
    header('location: index.php');
?>