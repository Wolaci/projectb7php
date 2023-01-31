<?php
if(isset($_POST['nome']) && !empty($_POST['nome'])){
    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $msg = addslashes($_POST['msg']);

    $para = "";
    $assunto = "Melhor que ontem";
    $corpo = "Nome: ".$nome." - E-mail ".$email." - Mensagem: ".$msg;

    $cabecalho = "From: email"."\r\n"."Reply-To: ".$email."\r\n"."X-Mailer: PHP/".phpversion();
    mail($para, $assunto, $corpo, $cabecalho);
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
    <form  method="POST">
        Nome:    
        <input type="text" name="nome"><br><br>
        E-mail:
        <input type="email" name="email"><br><br>
        Mensagem:<br><br>
        <textarea name="msg" id="msg" cols="30" rows="10"></textarea><br><br>
        <input type="submit">
    </form>
</body>
</html>