<?php
include_once('instrumento.php');
include_once('interface.php');

class Violao extends Instrumento implements IInstrumento {

	public $marca;

	function getMarca(){
		return $this->marca;
	}
	function setMarca($valor){
		$this->marca=$valor;
	}
	

	function tipoInstrumento(){
		echo"<center>";
		echo"<b> Instrumento: ".$this->nome."</b><p>";
		echo"Cor:".$this->cor."</br>";
		echo"Marca:".$this->marca."</br>";
		echo"Custa:R$ ".$this->preco."</br>";
		echo"Forma de pagamento:".$this->formaPagamento()."</br>";
		echo"</center><p>";
		
	}
	function formaPagamento(){
		return "cartao de crédito/débito, dinheiro ";
	}
	function loja(){
		echo"<center>";
		echo"(Vendido por MagaLu)";
		echo"</center></br>";
	}
}
?>