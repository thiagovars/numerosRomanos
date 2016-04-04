<?php

const DEZ = 'XL';

class Dez {
	
	private $objectNove;
	
	public function verificaNumero(){
		if ($this->numeroBase >= 10) {
			$this->numeroRomano += self::DEZ;
			$this->numeroBase -= 10;
			$this->verificaNumero();
		} else {
			$this->objectNove = new Nove();
			$this->objectNove->verificaNumero();
		}
		
		return $this->numeroConvertido;
	}
}