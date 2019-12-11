<?php
include_once('../DTO/Usuario.php');
include_once('../DAO/UsuarioDAO.php');
include_once('../conexao.php');
include_once "login.php";

$login = @$_GET["login"];
$email =@$_GET["email"];
$senha = @$_GET["senha"];
$nome = @$_GET["nome"];

$dao = new UsuarioDAO(null,$login,$email,$nome,$senha);
$usuarioDAO = $dao->getUsuario();

$usuarioDAO = $dao ->inserir($dao);   

header("Location: index.php");
exit;

?>