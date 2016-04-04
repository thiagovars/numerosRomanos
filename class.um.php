<?php

const UM = 'I';

class Um {
	
	public function verificaNumero(){
		if ($this->numeroBase >= 1) {
			$this->numeroRomano += self::UM;
			$this->numeroBase -= 1;
			$this->verificaNumero();
		}		
		return $this->numeroConvertido;
	}
}