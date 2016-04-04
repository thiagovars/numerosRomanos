<?php

const QUATRO = 'IV';

class Quatro {
	
	private $objectUm;
	
	public function verificaNumero(){
		if ($this->numeroBase >= 4) {
			$this->numeroRomano += self::QUATRO;
			$this->numeroBase -= 4;
			$this->verificaNumero();
		} else {
			$this->objectUm = new Um();
			$this->objectUm->verificaNumero();
		}
		
		return $this->numeroConvertido;
	}
}