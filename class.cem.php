<?php

const CEM = 'C';

class Cem {
	
	private $objectCinquenta;
	
	public function verificaNumero(){
		if ($this->numeroBase >= 100) {
			$this->numeroRomano += self::CEM;
			$this->numeroBase -= 100;
			$this->verificaNumero();
		} else {
			$this->objectCinquenta = new Cinquenta();
			$this->objectCinquenta->verificaNumero();
		}
		
		return $this->numeroConvertido;
	}
}