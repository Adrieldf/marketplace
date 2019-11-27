<?php

	/* @Autor: Dalker Pinheiro
	   Atributos e métodos da classe */
	   
	class Produto{
		//Atributos
		private $idProduto;
 		private $nome;
 		private $modelo;
 		private $Segmento;
 		private $Descrição;
 		private $preco;
 				
		//Métodos Getters e Setters
		public function getIdProduto(){
			return $this->idProduto;
		}
		public function getNome(){
			return $this->nome;
		}
		public function getModelo(){
			return $this->modelo;
		}
		public function getSegmento(){
			return $this->Segmento;
		}
		public function getDescrição(){
			return $this->Descrição;
		}
		public function getPreco(){
			return $this->preco;
		}
		
		public function setIdProduto($idProduto){
			$this->idProduto=$idProduto;
		}
		public function setNome($nome){
			$this->nome=$nome;
		}
		public function setModelo($modelo){
			$this->modelo=$modelo;
		}
		public function setSegmento($Segmento){
			$this->Segmento=$Segmento;
		}
		public function setDescrição($Descrição){
			$this->Descrição=$Descrição;
		}
		public function setPreco($preco){
			$this->preco=$preco;
		}
		
	}
?>