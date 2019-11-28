<?php

	/* @Autor: Dalker Pinheiro
	   Atributos e métodos da classe */
	   
	class Produto{
		//Atributos
		private $idProduto;

 		private $nome;

 		private $modelo;

 		private $Segmento;

 		private $Descricao;

 		private $preco;

		 public function __construct( $idProduto, $nome, $modelo, $Segmento, $Descricao, $preco)
		 {
			 $this->idProduto=$idProduto;
			 $this->nome=$nome;
			 $this->modelo=$modelo;
			 $this->Segmento=$Segmento;
			 $this->Descricao=$Descricao;
			 $this->preco=$preco;
		 }
		 
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

		public function getDescricao(){
			return $this->Descricao;
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

		public function setDescricao($Descricao){
			$this->Descricao=$Descricao;
		}

		public function setPreco($preco){
			$this->preco=$preco;
		}

		
	}
?>