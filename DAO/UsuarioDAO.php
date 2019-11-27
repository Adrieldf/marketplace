<?php


class UsuarioDAO{

	//Carrega um elemento pela chave primária
	public function carregar($idUsuario){
		include("conexao.php");
		$sql = 'SELECT * FROM usuario WHERE idUsuario = :idUsuario';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(":idUsuario",$idUsuario);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}

	//Lista todos os elementos da tabela
	public function listarTodos(){
		include("conexao.php");
		$sql = 'SELECT * FROM usuario';
		$consulta = $conexao->prepare($sql);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}
	
	//Lista todos os elementos da tabela listando ordenados por uma coluna específica
	public function listarTodosOrgenandoPor($coluna){
		include("conexao.php");
		$sql = 'SELECT * FROM usuario ORDER BY '.$coluna;
		$consulta = $conexao->prepare($sql);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}
	
	//Apaga um elemento da tabela
	public function deletar($idUsuario){
		include("conexao.php");
		$sql = 'DELETE FROM usuario WHERE idUsuario = :idUsuario';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(":idUsuario",$idUsuario);
		if($consulta->execute())
			return true;
		else
			return false;
	}
	
	//Insere um elemento na tabela
	public function inserir($usuario){
		include("conexao.php");
		$sql = 'INSERT INTO usuario (idUsuario, nome, email, usuario, senha) VALUES (:idUsuario, :nome, :email, :usuario, :senha)';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(':idUsuario',$usuario->getIdUsuario()); 

		$consulta->bindValue(':nome',$usuario->getNome()); 

		$consulta->bindValue(':email',$usuario->getEmail()); 

		$consulta->bindValue(':usuario',$usuario->getUsuario()); 

		$consulta->bindValue(':senha',$usuario->getSenha()); 
		if($consulta->execute())
			return true;
		else
			return false;
	}
	
	//Atualiza um elemento na tabela
	public function atualizar($usuario){
		include("conexao.php");
		$sql = 'UPDATE usuario SET idUsuario = :idUsuario, nome = :nome, email = :email, usuario = :usuario, senha = :senha WHERE idUsuario = :idUsuario';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(':idUsuario',$usuario->getIdUsuario()); 

		$consulta->bindValue(':nome',$usuario->getNome()); 

		$consulta->bindValue(':email',$usuario->getEmail()); 

		$consulta->bindValue(':usuario',$usuario->getUsuario()); 

		$consulta->bindValue(':senha',$usuario->getSenha()); 
		if($consulta->execute())
			return true;
		else
			return false;
	}

	//Apaga todos os elementos da tabela
	public function limparTabela(){
		include("conexao.php");
		$sql = 'DELETE FROM usuario';
		$consulta = $conexao->prepare($sql);
		if($consulta->execute())
			return true;
		else
			return false;
	}
}
?>