<?php

const CINQUENTA = 'L';

class Cinquenta extends romanorules {
	
	private $objectQuarenta;
	
	public function verificaNumero($numeroBase, $numeroRomano){
		$this->setNumeroBase($numeroBase);
		$this->setNumeroRomano($numeroRomano);
		if ($this->numeroBase >= 50) {
			$this->numeroRomano .= self::CINQUENTA;
			$this->numeroBase -= 50;
			$this->verificaNumero($this->numeroBase, $this->numeroRomano);
		} else {
			$this->objectQuarenta = new Quarenta();
			$this->objectQuarenta->verificaNumero($this->numeroBase, $this->numeroRomano);
		}
	}
}