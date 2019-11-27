<?php

	/* @Autor: Dalker Pinheiro
	   Atributos e métodos da classe */
	   
	class Vendedor{
		//Atributos
		private $idVendedor;
 		private $nome;
 		private $cpf;
 		private $cep;
 		private $rua;
 		private $numero;
 		private $bairro;
 		private $cidade;
 		private $estado;
 		private $pais;
 		private $telefone;
 		private $celular;
 		private $email;
 				
		//Métodos Getters e Setters
		public function getIdVendedor(){
			return $this->idVendedor;
		}
		public function getNome(){
			return $this->nome;
		}
		public function getCpf(){
			return $this->cpf;
		}
		public function getCep(){
			return $this->cep;
		}
		public function getRua(){
			return $this->rua;
		}
		public function getNumero(){
			return $this->numero;
		}
		public function getBairro(){
			return $this->bairro;
		}
		public function getCidade(){
			return $this->cidade;
		}
		public function getEstado(){
			return $this->estado;
		}
		public function getPais(){
			return $this->pais;
		}
		public function getTelefone(){
			return $this->telefone;
		}
		public function getCelular(){
			return $this->celular;
		}
		public function getEmail(){
			return $this->email;
		}
		
		public function setIdVendedor($idVendedor){
			$this->idVendedor=$idVendedor;
		}
		public function setNome($nome){
			$this->nome=$nome;
		}
		public function setCpf($cpf){
			$this->cpf=$cpf;
		}
		public function setCep($cep){
			$this->cep=$cep;
		}
		public function setRua($rua){
			$this->rua=$rua;
		}
		public function setNumero($numero){
			$this->numero=$numero;
		}
		public function setBairro($bairro){
			$this->bairro=$bairro;
		}
		public function setCidade($cidade){
			$this->cidade=$cidade;
		}
		public function setEstado($estado){
			$this->estado=$estado;
		}
		public function setPais($pais){
			$this->pais=$pais;
		}
		public function setTelefone($telefone){
			$this->telefone=$telefone;
		}
		public function setCelular($celular){
			$this->celular=$celular;
		}
		public function setEmail($email){
			$this->email=$email;
		}
		
	}
?>