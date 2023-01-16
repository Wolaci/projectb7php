<?php

$dsn = "mysql:dbname=projeto_ordenar;host:localhost";
$dbuser = "root";
$dbpass = "";

try {
	$pdo = new PDO($dsn, $dbuser, $dbpass);
} catch(PDOException $e) {
	echo "ERRO: ".$e->getMessage();
	exit;
}