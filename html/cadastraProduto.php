<?php
include_once('../DTO/Usuario.php');
include_once('../DAO/UsuarioDAO.php');
include_once('../conexao.php');
include_once "login.php";

$nome  = @$_GET["nome"];
$modelo  =@$_GET["modelo"];
$Segmento = @$_GET["Segmento"];
$Descrição  = @$_GET["Descrição "];
$preco  = @$_GET["preco "];

$Produto = new Produto($nome,$modelo,$Segmento,$Descrição,$preco);
//$usuarioDAO = $dao->getUsuario();
$dao = new ProdutoDAO();
$Pd = $dao ->inserir($Produto);

header("Location: index.php");
exit;

?>