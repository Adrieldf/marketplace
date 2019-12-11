<?php


	   
	class Usuario{
		//Atributos
		private $idUsuario;

 		private $nome;

 		private $email;

 		private $usuario;

 		private $senha;
		
		 public function __construct( $idUsuario, $nome, $email, $usuario, $senha)
		 {
			 $this->idUsuario=$idUsuario;
			 $this->nome=$nome;
			 $this->email=$email;
			 $this->usuario=$usuario;
			 $this->senha=$senha;
		 }
	 
 				
		//Métodos Getters e Setters
		public function getIdUsuario(){
			return $this->idUsuario;
		}

		public function getNome(){
			return $this->nome;
		}

		public function getEmail(){
			return $this->email;
		}

		public function getUsuario(){
			return $this->usuario;
		}

		public function getSenha(){
			return $this->senha;
		}

		
		public function setIdUsuario($idUsuario){
			$this->idUsuario=$idUsuario;
		}

		public function setNome($nome){
			$this->nome=$nome;
		}

		public function setEmail($email){
			$this->email=$email;
		}

		public function setUsuario($usuario){
			$this->usuario=$usuario;
		}

		public function setSenha($senha){
			$this->senha=$senha;
		}

		
	}
?>