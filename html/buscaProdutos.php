<?php
include_once('../DTO/Produto.php');
include_once('../DAO/ProdutoDAO.php');
include_once('../conexao.php');

// procura usuários

//$palavra = $_POST['palavra'];

$dao = new ProdutoDAO();
$produtos = $dao->listarTodos();

?>
    <?php
    if(sizeof($produtos)>0){
    ?>
    <?php 
    foreach ($produtos as $produto) {
    ?>
    	<article class="item">
					<header>
						<a href="../html/detalheProdutos.php"><img src="https://images-submarino.b2w.io/produtos/01/00/sku/7929/7/7929783_1GG.jpg" /></a>
                        <h3><?=$produto->getNome();?> </h3>
					</header>
					<p><?=$produto->getModelo();?></p>
					<p><?=$produto->getDescricao();?></p>
					<ul class="actions">
                        <h2>R$ <?=$produto->getPreco();?></h2>
					</ul>
        </article>
            <?php }?>
     
    <?php }else{?>
    <h4>Nao foram encontrados registros com esta palavra.</h4>
    <?php }?>
