<?php

	/* @Autor: Dalker Pinheiro
	   Atributos e métodos da classe */
	   
	class Pedido{
		//Atributos
		private $idPedido;
 		private $nomecartao;
 		private $numerocartao;
 		private $datavalidade;
 		private $codigoseguranca;
 				
		//Métodos Getters e Setters
		public function getIdPedido(){
			return $this->idPedido;
		}
		public function getNomecartao(){
			return $this->nomecartao;
		}
		public function getNumerocartao(){
			return $this->numerocartao;
		}
		public function getDatavalidade(){
			return $this->datavalidade;
		}
		public function getCodigoseguranca(){
			return $this->codigoseguranca;
		}
		
		public function setIdPedido($idPedido){
			$this->idPedido=$idPedido;
		}
		public function setNomecartao($nomecartao){
			$this->nomecartao=$nomecartao;
		}
		public function setNumerocartao($numerocartao){
			$this->numerocartao=$numerocartao;
		}
		public function setDatavalidade($datavalidade){
			$this->datavalidade=$datavalidade;
		}
		public function setCodigoseguranca($codigoseguranca){
			$this->codigoseguranca=$codigoseguranca;
		}
		
	}
?>