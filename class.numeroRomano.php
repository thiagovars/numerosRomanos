<?php

class numeroRomano {
	
	private $objectMil;
	private $numeroBase;
	private $numeroConvertido;
	 
	public function __construct() {
		$this->objectMil = new Mil();
		unset($this->numeroConvertido);
	}
	
	public function converteNumero($numero) {
		$this->setNumeroBase($numero);
		$this->numeroConvertido = $this->objectMil->verificaNumero();
	
		return $this->numeroConvertido;
	}
	
	public function setNumeroBase($numeroNovo) {
		$this->numeroBase = $numeroNovo;
	}
}