<?php

const NOVE = 'IX';

class Nove {
	
	private $objectCinco;
	
	public function verificaNumero(){
		if ($this->numeroBase >= 9) {
			$this->numeroRomano += self::NOVE;
			$this->numeroBase -= 9;
			$this->verificaNumero();
		} else {
			$this->objectCinco = new Cinco();
			$this->objectCinco->verificaNumero();
		}
		
		return $this->numeroConvertido;
	}
}