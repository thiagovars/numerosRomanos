<?php

const CEM = 'C';

class Cem extends romanorules {
	
	private $objectCinquenta;
	
	public function verificaNumero($numeroBase, $numeroRomano){
		$this->setNumeroBase($numeroBase);
		$this->setNumeroRomano($numeroRomano);
		if ($this->numeroBase >= 100) {
			$this->numeroRomano .= self::CEM;
			$this->numeroBase -= 100;
			$this->verificaNumero($this->numeroBase, $this->numeroRomano);
		} else {
			$this->objectCinquenta = new Cinquenta();
			$this->objectCinquenta->verificaNumero($this->numeroBase, $this->numeroRomano);
		}
	}
}