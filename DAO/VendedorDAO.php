<?php

class VendedorDAO{

	//Carrega um elemento pela chave primária
	public function carregar($idVendedor){
		include("../conexao.php");
		$sql = 'SELECT * FROM vendedor WHERE idVendedor = :idVendedor';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(":idVendedor",$idVendedor);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}

	//Lista todos os elementos da tabela
	public function listarTodos(){
		include("../conexao.php");
		$sql = 'SELECT * FROM vendedor';
		$consulta = $conexao->prepare($sql);
		$consulta->execute();
		$vendedores = array();        
	
        while ($row = $consulta->fetch(PDO::FETCH_ASSOC)){
            extract($row);
            $vendedores[] = new Vendedor( $idVendedor, $nome, $cpf, $cep, $rua, $numero, $bairro, $cidade, $estado, $pais, $telefone, $celular, $email);
        }
	
        return $vendedores;
	}
	
	//Lista todos os elementos da tabela listando ordenados por uma coluna específica
	public function listarTodosOrgenandoPor($coluna){
		include("../conexao.php");
		$sql = 'SELECT * FROM vendedor ORDER BY '.$coluna;
		$consulta = $conexao->prepare($sql);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}
	
	//Apaga um elemento da tabela
	public function deletar($idVendedor){
		include("../conexao.php");
		$sql = 'DELETE FROM vendedor WHERE idVendedor = :idVendedor';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(":idVendedor",$idVendedor);
		if($consulta->execute())
			return true;
		else
			return false;
	}
	
	//Insere um elemento na tabela
	public function inserir($vendedor){
		include("../conexao.php");
		$sql = 'INSERT INTO vendedor (idVendedor, nome, cpf, cep, rua, numero, bairro, cidade, estado, pais, telefone, celular, email) VALUES (:idVendedor, :nome, :cpf, :cep, :rua, :numero, :bairro, :cidade, :estado, :pais, :telefone, :celular, :email)';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(':idVendedor',$vendedor->getIdVendedor()); 

		$consulta->bindValue(':nome',$vendedor->getNome()); 

		$consulta->bindValue(':cpf',$vendedor->getCpf()); 

		$consulta->bindValue(':cep',$vendedor->getCep()); 

		$consulta->bindValue(':rua',$vendedor->getRua()); 

		$consulta->bindValue(':numero',$vendedor->getNumero()); 

		$consulta->bindValue(':bairro',$vendedor->getBairro()); 

		$consulta->bindValue(':cidade',$vendedor->getCidade()); 

		$consulta->bindValue(':estado',$vendedor->getEstado()); 

		$consulta->bindValue(':pais',$vendedor->getPais()); 

		$consulta->bindValue(':telefone',$vendedor->getTelefone()); 

		$consulta->bindValue(':celular',$vendedor->getCelular()); 

		$consulta->bindValue(':email',$vendedor->getEmail()); 
		if($consulta->execute())
			return true;
		else
			return false;
	}
	
	//Atualiza um elemento na tabela
	public function atualizar($vendedor){
		include("../conexao.php");
		$sql = 'UPDATE vendedor SET idVendedor = :idVendedor, nome = :nome, cpf = :cpf, cep = :cep, rua = :rua, numero = :numero, bairro = :bairro, cidade = :cidade, estado = :estado, pais = :pais, telefone = :telefone, celular = :celular, email = :email WHERE idVendedor = :idVendedor';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(':idVendedor',$vendedor->getIdVendedor()); 

		$consulta->bindValue(':nome',$vendedor->getNome()); 

		$consulta->bindValue(':cpf',$vendedor->getCpf()); 

		$consulta->bindValue(':cep',$vendedor->getCep()); 

		$consulta->bindValue(':rua',$vendedor->getRua()); 

		$consulta->bindValue(':numero',$vendedor->getNumero()); 

		$consulta->bindValue(':bairro',$vendedor->getBairro()); 

		$consulta->bindValue(':cidade',$vendedor->getCidade()); 

		$consulta->bindValue(':estado',$vendedor->getEstado()); 

		$consulta->bindValue(':pais',$vendedor->getPais()); 

		$consulta->bindValue(':telefone',$vendedor->getTelefone()); 

		$consulta->bindValue(':celular',$vendedor->getCelular()); 

		$consulta->bindValue(':email',$vendedor->getEmail()); 
		if($consulta->execute())
			return true;
		else
			return false;
	}

	//Apaga todos os elementos da tabela
	public function limparTabela(){
		include("../conexao.php");
		$sql = 'DELETE FROM vendedor';
		$consulta = $conexao->prepare($sql);
		if($consulta->execute())
			return true;
		else
			return false;
	}

}
?>