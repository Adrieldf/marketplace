<?php
$servidor = "localhost";
$usuariologin = "root";
$senha = "";
$nomeDoBanco = "marketplacebd";
try {
	$conexao = new PDO("mysql:dbname=$nomeDoBanco; host=$servidor", $usuariologin, $senha);
	$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$conexao -> exec("SET CHARACTER SET utf8");
} catch(PDOException $e) {
	echo 'ERROR: ' . $e->getMessage();
}
?>	
