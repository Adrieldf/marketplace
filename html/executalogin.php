<?php 
include_once('../DTO/Produto.php');
include_once('../DAO/ProdutoDAO.php');
include_once('../conexao.php');
 
// Inicia sessÃ£o 
session_start();

// Recupera o login 
$login = isset($_POST["login"]) ? addslashes(trim($_POST["login"])) : FALSE; 
// Recupera a senha, a criptografando em MD5 
$senha = isset($_POST["senha"]) ? md5(trim($_POST["senha"])) : FALSE; 
//$senha = isset($_POST["senha"]) ? trim($_POST["senha"]) : FALSE; 
 
// UsuÃ¡rio nÃ£o forneceu a senha ou o login 
if(!$login || !$senha) 
{ 
    echo "VocÃª deve digitar sua senha e login!<br>"; 
    echo "<a href='login.php'>Efetuar Login</a>";
    exit; 
}  

//$dao = $factory->getUsuarioDao();
//$usuario = $dao->buscaPorLogin($login);

$problemas = FALSE;
if($usuario) {
    // Agora verifica a senha 
    if(!strcmp($senha, $usuario->getSenha())) 
    { 
        // TUDO OK! Agora, passa os dados para a sessÃ£o e redireciona o usuÃ¡rio 
        $_SESSION["id_usuario"]= $usuario->getId(); 
        $_SESSION["nome_usuario"] = stripslashes($usuario->getNome()); 
        //$_SESSION["permissao"]= $dados["postar"]; 
        header("Location: index.php"); 
        exit; 
    } else {
        $problemas = TRUE; 
    }
} else {
    $problemas = TRUE; 
}

if($problemas==TRUE) {
    header("Location: index.php"); 
    exit; 
}
?>