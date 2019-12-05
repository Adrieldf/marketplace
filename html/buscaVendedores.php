<?php
include_once('../DTO/Vendedor.php');
include_once('../DAO/VendedorDAO.php');
include_once('../conexao.php');

$dao = new VendedorDAO();
$vendedores = $dao->listarTodos();

?>
    <?php
    if(sizeof($vendedores)>0){
    ?>
    <?php 
    foreach ($vendedores as $vendedor) {
    ?>
     <div class="divItem">
        <label class="labelDivItem"><?=$vendedor->getNome();?></label>
        <a class="rightButton" href="" style="text-decoration: none;">Excluir</a>
        <a class="rightButton" href="../html/cadVendedoresEdit.php" style="text-decoration: none;">Editar</a>
      </div>
            <?php }?>
     
    <?php }else{?>
    <h4>Nao foram encontrados registros com esta palavra.</h4>
    <?php }?>
