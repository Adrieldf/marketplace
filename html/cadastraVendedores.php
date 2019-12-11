<?php
include_once('../DTO/Vendedor.php');
include_once('../DAO/VendedorDAO.php');
include_once('../conexao.php');

$idVendedor = $_POST["idVendedor"];
$nome = $_POST["nome"];
$cpf = $_POST["cpf"];
$cep = $_POST["cep"];
$rua = $_POST["rua"];
$numero = $_POST["numero"];
$bairro = $_POST["bairro"];
$cidade = $_POST["cidade"];
$estado = $_POST["estado"];
$pais = $_POST["pais"];
$telefone = $_POST["telefone"];
$celular = $_POST["celular"];
$email = $_POST["email"];


$dao = new VendedorDAO();
$vend = new Vendedor($idVendedor, $nome, $cpf, $cep, $rua, $numero, $bairro, $cidade, $estado, $pais, $telefone, $celular, $email);
$vendedores = $dao->listarTodos();

?>
