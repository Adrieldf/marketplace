<?php

	   
class ProdutoDAO{

	//Carrega um elemento pela chave primária
	public function carregar($idProduto){
		include("../conexao.php");
		$sql = 'SELECT * FROM produto WHERE idProduto = :idProduto';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(":idProduto",$idProduto);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}

	//Lista todos os elementos da tabela
	public function listarTodos(){
		include("../conexao.php");
		$sql = 'SELECT * FROM produto';
		$consulta = $conexao->prepare($sql);
		$consulta->execute();
	//	print_r($consulta->fetchAll(PDO::FETCH_ASSOC));
	//	return ($consulta->fetchAll(PDO::FETCH_ASSOC));

		$produtos = array();        
	
        while ($row = $consulta->fetch(PDO::FETCH_ASSOC)){
            extract($row);
            $produtos[] = new Produto($idProduto,$nome,$modelo,$Segmento,$Descrição, $preco);
        }
	
        return $produtos;
	}
	
	//Lista todos os elementos da tabela listando ordenados por uma coluna específica
	public function listarTodosOrgenandoPor($coluna){
		include("../conexao.php");
		$sql = 'SELECT * FROM produto ORDER BY '.$coluna;
		$consulta = $conexao->prepare($sql);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}
	
	//Apaga um elemento da tabela
	public function deletar($idProduto){
		include("../conexao.php");
		$sql = 'DELETE FROM produto WHERE idProduto = :idProduto';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(":idProduto",$idProduto);
		if($consulta->execute())
			return true;
		else
			return false;
	}
	
	//Insere um elemento na tabela
	public function inserir($produto){
		include("../conexao.php");
		$sql = 'INSERT INTO produto (idProduto, nome, modelo, Segmento, Descrição, preco) VALUES (:idProduto, :nome, :modelo, :Segmento, :Descricao, :preco)';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(':idProduto',$produto->getIdProduto()); 

		$consulta->bindValue(':nome',$produto->getNome()); 

		$consulta->bindValue(':modelo',$produto->getModelo()); 

		$consulta->bindValue(':Segmento',$produto->getSegmento()); 

		$consulta->bindValue(':Descricao',$produto->getDescricao()); 

		$consulta->bindValue(':preco',$produto->getPreco()); 
		if($consulta->execute())
			return true;
		else
			return false;
	}
	
	//Atualiza um elemento na tabela
	public function atualizar($produto){
		include("../conexao.php");
		$sql = 'UPDATE produto SET idProduto = :idProduto, nome = :nome, modelo = :modelo, Segmento = :Segmento, Descrição = :Descricao, preco = :preco WHERE idProduto = :idProduto';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(':idProduto',$produto->getIdProduto()); 

		$consulta->bindValue(':nome',$produto->getNome()); 

		$consulta->bindValue(':modelo',$produto->getModelo()); 

		$consulta->bindValue(':Segmento',$produto->getSegmento()); 

		$consulta->bindValue(':Descricao',$produto->getDescricao()); 

		$consulta->bindValue(':preco',$produto->getPreco()); 
		if($consulta->execute())
			return true;
		else
			return false;
	}

	//Apaga todos os elementos da tabela
	public function limparTabela(){
		include("../conexao.php");
		$sql = 'DELETE FROM produto';
		$consulta = $conexao->prepare($sql);
		if($consulta->execute())
			return true;
		else
			return false;
	}
}
?>