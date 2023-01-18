<?php
session_start();
if(!isset($_SESSION['nome']) && empty($_SESSION['nome'])){
    $nome = addslashes($_POST['nome']);
    $dsn = "mysql:dbname=projeto_ordenar;host:localhost";
    $dbuser = "root";
    $dbpass = "";

    try {
        $pdo = new PDO($dsn, $dbuser, $dbpass);
        $sql = "SELECT * FROM usuarios WHERE nome = '$nome'";
        $sql = $pdo->query($sql);
        if($sql->rowCount() > 0){
            $dado = $sql->fetch();
            $_SESSION['id'] = $dado['id'];
            header('Location: index.php');
        }
    } catch(PDOException $e) {
        echo "ERRO: ".$e->getMessage();
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <label for="">Nome</label>
        <input type="text" name="nome">
        <input type="submit">
    </form>
</body>
</html>