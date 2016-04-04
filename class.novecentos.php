<?php

const NOVECENTOS = 'CM';

class Novecentos extends numeroRomano {	
	
	private $objectQuinhentos;
	
	public function verificaNumero(){
		if ($this->numeroBase >= 900) {
			$this->numeroRomano += self::NOVECENTOS;
			$this->numeroBase -= 900;
			$this->verificaNumero();
		} else {
			$this->objectQuinhentos = new Quinhentos();
			$this->objectQuinhentos->verificaNumero();
		}
		
		return $this->numeroConvertido;
	}
	
}