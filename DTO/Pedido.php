<?php

	/* @Autor: Dalker Pinheiro
	   Atributos e métodos da classe */
	   
	class Pedido{
		//Atributos
		private $idPedido;





		//Métodos Getters e Setters
		public function getIdPedido(){
			return $this->idPedido;
		}

			return $this->nomecartao;
		}

			return $this->numerocartao;
		}

			return $this->datavalidade;
		}

			return $this->codigoseguranca;
		}

		public function setIdPedido($idPedido){
			$this->idPedido=$idPedido;
		}

			$this->nomecartao=$nomecartao;
		}

			$this->numerocartao=$numerocartao;
		}

			$this->datavalidade=$datavalidade;
		}

			$this->codigoseguranca=$codigoseguranca;
		}

	}
?>