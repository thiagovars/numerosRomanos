<?php

const CINCO = 'V';

class Cinco {
	
	private $objectQuatro;
	
	public function verificaNumero(){
		if ($this->numeroBase >= 5) {
			$this->numeroRomano += self::CINCO;
			$this->numeroBase -= 5;
			$this->verificaNumero();
		} else {
			$this->objectQuatro = new Quatro();
			$this->objectQuatro->verificaNumero();
		}
		
		return $this->numeroConvertido;
	}
}