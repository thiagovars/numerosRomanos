<?php

class romanorules {
	
	public static $numeroRomano;
	public static $numeroBase;
	
	public function setNumeroBase($numero) {
		$this->numeroBase = $numero;
	}
	
	public function getNumeroBase() {
		return $this->numeroBase;
	}
	
	public function setNumeroRomano($numero) {
		$this->numeroRomano = $numero;
	}
}