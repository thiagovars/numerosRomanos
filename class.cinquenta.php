<?php

const CINQUENTA = 'L';

class Cinquenta {
	
	private $objectQuarenta;
	
	public function verificaNumero(){
		if ($this->numeroBase >= 50) {
			$this->numeroRomano += self::CINQUENTA;
			$this->numeroBase -= 50;
			$this->verificaNumero();
		} else {
			$this->objectQuarenta = new Quarenta();
			$this->objectQuarenta->verificaNumero();
		}
		
		return $this->numeroConvertido;
	}
}