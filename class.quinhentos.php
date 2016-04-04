<?php

const QUINHENTOS = 'D';

class Quinhentos {
	
	private $objectQuatrocentos;
	
	public function verificaNumero(){
		if ($this->numeroBase >= 500) {
			$this->numeroRomano += self::QUINHENTOS;
			$this->numeroBase -= 500;
			$this->verificaNumero();
		} else {
			$this->objectQuatrocentos = new Quatrocentos();
			$this->objectQuatrocentos->verificaNumero();
		}
		
		return $this->numeroConvertido;
	}
}