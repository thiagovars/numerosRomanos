<?php

const QUARENTA = 'XL';

class Quarenta {
	
	private $objectDez;
	
	public function verificaNumero(){
		if ($this->numeroBase >= 40) {
			$this->numeroRomano += self::Dez;
			$this->numeroBase -= 40;
			$this->verificaNumero();
		} else {
			$this->objectDez = new Dez();
			$this->objectDez->verificaNumero();
		}
		
		return $this->numeroConvertido;
	}
}