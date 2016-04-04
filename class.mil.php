<?php	

const MIL = 'M';

class Mil extends numeroRomano {
	
	private $objectNovecentos;
	
	public function verificaNumero(){
		if ($this->numeroBase >= 1000) {
			$this->numeroRomano += self::MIL;
			$this->numeroBase -= 1000;
			$this->verificaNumero();
		} else {
			$this->objectNovecentos = new Novecentos();
			$this->objectNovecentos->verificaNumero();
		}
		
		return $this->numeroConvertido;
	}
	
}