<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        require 'config.php';
    ?>
    <table border="0" width="100%">
        <tr>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Idade</th>
        </tr>
        <?php
            $sql = "SELECT * FROM usuarios";
            $sql = $pdo->query($sql);
            if($sql->rowCount()>0){
                foreach($sql->fetchAll() as $usuario){
                    
                }
            }
        ?>
    </table>
</body>
</html>