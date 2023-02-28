<?php

include 'contato.class.php';
$contato = new Contato();

?>

<h1>Contatos</h1>

<table border="1" width="600">
    <tr>
        <th>ID</th>
        <th>NOME</th>
        <th>E-MAIL</th>
        <th>AÇÕES</th>
    </tr>


    <?php
        $lista = $contato->getAll();
        foreach($lista as $item):
        ?>
        <tr>
            <td><?= $item['id'] ?></td>
            <td><?= $item['nome'] ?></td>
            <td><?= $item['email'] ?></td>
            <td>
                <a href="">[ EDITAR ]</a>
                <a href="">[ excluir ]</a>
            </td>
        </tr>
        <? endforeach;?>
    
</table>