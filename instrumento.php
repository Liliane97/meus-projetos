<?php
abstract class Instrumento{
	protected $nome;
	protected $cor;
	protected $preco;
     //METODO GET
	function getNome(){
		return $this->nome;
	}
	function getCor(){
		return $this->cor;
	}
	function getPreco(){
		return $this->preco;
	}
	//METODO SET
	function setNome($valor){
		$this->nome=$valor;
	}
	function setCor($valor){
		$this->cor=$valor;
	}
	function sEtPreco($valor){
		$this->preco=$valor;
	}

abstract function tipoInstrumento();
abstract function loja();

}
?>