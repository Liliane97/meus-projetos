<?php
include_once('instrumento.php');

class bateria extends Instrumento{
	public $modelo;

	function getModelo(){
		return $this->modelo;
	}
	function setModelo($valor){
		$this->modelo=$valor;
	}

	function tipoInstrumento(){
		echo"<center>";
		echo"<b>Instrumento:".$this->nome."</b><p>";
		echo"Cor: ".$this->cor."</br>";
		echo"Modelo:".$this->modelo."</br>";
		echo"Custa:R$ ".$this->preco."</br>";
		echo"Forma de pagamento:".$this->formaPagamento()."</br>";
		echo"</center><p>";
	}
	function formaPagamento(){
		return "Cartao de crédito/débito ou dinheiro";

	}
	function loja(){
		echo"<center>";
		echo"(Vendido por Eletrobella)";
	}
}

?>