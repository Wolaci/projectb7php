<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="editar.php" method="POST">
        <label for="">Nome</label>
        <input type="text" name="nome">
        <label for="">Idade</label>
        <input type="number" name="idade">
        <input type="submit">
        <input type="hidden" name="id" value="<?=$_GET['id']?>">
    </form>
</body>
</html>