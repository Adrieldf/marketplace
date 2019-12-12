<?php
include_once('../DTO/Usuario.php');
include_once('../DAO/UsuarioDAO.php');
include_once('../conexao.php');
include_once "login.php";

$login = @$_GET["txtlogin"];
$email =@$_GET["email"];
$senha = @$_GET["senha"];
$nome = @$_GET["nome"];

$usuarioDAO = new UsuarioDAO();
$user = new Usuario(1,$login,$email,$nome,$senha,$usuarioDAO);

echo $user->getIdUsuario();
$usu = $usuarioDAO->inserir($user);   
//$user->inserirDao();
//header("Location: index.php");
//exit;

?>