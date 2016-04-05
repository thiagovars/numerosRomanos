<?php

const QUARENTA = 'XL';

class Quarenta extends romanorules {
	
	private $objectDez;
	
	public function verificaNumero($numeroBase, $numeroRomano){
		$this->setNumeroBase($numeroBase);
		$this->setNumeroRomano($numeroRomano);
		if ($this->numeroBase >= 40) {
			$this->numeroRomano .= self::Dez;
			$this->numeroBase -= 40;
			$this->verificaNumero($this->numeroBase, $this->numeroRomano);
		} else {
			$this->objectDez = new Dez();
			$this->objectDez->verificaNumero($this->numeroBase, $this->numeroRomano);
		}
	}
}