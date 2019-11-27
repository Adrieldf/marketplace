<?php

	   
class PedidoDAO{

	//Carrega um elemento pela chave primária
	public function carregar($idPedido){
		include("conexao.php");
		$sql = 'SELECT * FROM pedido WHERE idPedido = :idPedido';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(":idPedido",$idPedido);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}

	//Lista todos os elementos da tabela
	public function listarTodos(){
		include("conexao.php");
		$sql = 'SELECT * FROM pedido';
		$consulta = $conexao->prepare($sql);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}
	
	//Lista todos os elementos da tabela listando ordenados por uma coluna específica
	public function listarTodosOrgenandoPor($coluna){
		include("conexao.php");
		$sql = 'SELECT * FROM pedido ORDER BY '.$coluna;
		$consulta = $conexao->prepare($sql);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}
	
	//Apaga um elemento da tabela
	public function deletar($idPedido){
		include("conexao.php");
		$sql = 'DELETE FROM pedido WHERE idPedido = :idPedido';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(":idPedido",$idPedido);
		if($consulta->execute())
			return true;
		else
			return false;
	}
	
	//Insere um elemento na tabela
	public function inserir($pedido){
		include("conexao.php");
		$sql = 'INSERT INTO pedido (idPedido, nomecartao, numerocartao, datavalidade, codigoseguranca) VALUES (:idPedido, :nomecartao, :numerocartao, :datavalidade, :codigoseguranca)';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(':idPedido',$pedido->getIdPedido()); 

		$consulta->bindValue(':nomecartao',$pedido->getNomecartao()); 

		$consulta->bindValue(':numerocartao',$pedido->getNumerocartao()); 

		$consulta->bindValue(':datavalidade',$pedido->getDatavalidade()); 

		$consulta->bindValue(':codigoseguranca',$pedido->getCodigoseguranca()); 
		if($consulta->execute())
			return true;
		else
			return false;
	}
	
	//Atualiza um elemento na tabela
	public function atualizar($pedido){
		include("conexao.php");
		$sql = 'UPDATE pedido SET idPedido = :idPedido, nomecartao = :nomecartao, numerocartao = :numerocartao, datavalidade = :datavalidade, codigoseguranca = :codigoseguranca WHERE idPedido = :idPedido';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(':idPedido',$pedido->getIdPedido()); 

		$consulta->bindValue(':nomecartao',$pedido->getNomecartao()); 

		$consulta->bindValue(':numerocartao',$pedido->getNumerocartao()); 

		$consulta->bindValue(':datavalidade',$pedido->getDatavalidade()); 

		$consulta->bindValue(':codigoseguranca',$pedido->getCodigoseguranca()); 
		if($consulta->execute())
			return true;
		else
			return false;
	}

	//Apaga todos os elementos da tabela
	public function limparTabela(){
		include("conexao.php");
		$sql = 'DELETE FROM pedido';
		$consulta = $conexao->prepare($sql);
		if($consulta->execute())
			return true;
		else
			return false;
	}
}
?>