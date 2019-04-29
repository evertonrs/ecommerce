<?php
	namespace Cliente;

	class Cadastro extends \Cadastro{
		public function registrarVenda(){
			echo "Registro ok : ".$this->getNome();
		}
	}
?>