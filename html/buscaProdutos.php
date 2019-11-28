<?php
include_once('../DTO/Produto.php');
include_once('../DAO/ProdutoDAO.php');
include_once('../conexao.php');

// procura usuários

//$palavra = $_POST['palavra'];

$dao = new ProdutoDAO();
$produtos = $dao->listarTodos();

?>
<section class="panel col-lg-9">

    <header class="panel-heading">
        Dados da busca:
    </header>
    <?php
    if(sizeof($produtos)>0){
    ?>
    <table class="table table-striped table-advance table-hover">
        <tbody>
            <tr>
                <th><i class="icon_profile"></i> Nome</th>
                <th><i class="icon_profile"></i> Modelo</th>
                <th><i class="icon_mail_alt"></i> Descrioção</th>
            </tr>
            <?php 
            foreach ($produtos as $produto) {
            ?>
            <tr>
                <td><?=$produto->getNome();?></td>
                <td><?=$produto->getModelo();?></td>
                <td><?=$produto->getDescricao();?></td>
            </tr>
            <?php }?>
        </tbody>
    </table>
    <?php }else{?>
    <h4>Nao foram encontrados registros com esta palavra.</h4>
    <?php }?>
</section>
