<?php
// 1920 x 1080

$arquivo = "thelast.jpg";

$largura = 200;
$altura = 200;

list($largura_original, $altura_original) = getImagesize($arquivo);

$ratio = $largura_original / $altura_original;

if($largura / $altura > $ratio){
    $largura = $altura * $ratio;
}else{
    $altura = $largura / $ratio;
}

// echo "LARGURA: ".$largura." - Altura: ".$altura;
$imagem_final = imagecreatetruecolor($largura, $altura);
$imagem_original = imagecreatefromjpg($arquivo);

imagecopyresampled($imagem_final, $imagem_original, 
    0, 0, 0, 0, $largura, $altura, $largura_original, $altura_original);

imagejpg($imagem_final, null);