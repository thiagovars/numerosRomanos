<?php

const QUATROCENTOS = 'CD';

class Quatrocentos {
	
	private $objectCem;
	
	public function verificaNumero(){
		if ($this->numeroBase >= 400) {
			$this->numeroRomano += self::QUATROCENTOS;
			$this->numeroBase -= 400;
			$this->verificaNumero();
		} else {
			$this->objectCem = new Cem();
			$this->objectCem->verificaNumero();
		}
		
		return $this->numeroConvertido;
	}
}