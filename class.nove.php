<?php

const NOVE = 'IX';

class Nove extends romanorules {
	
	private $objectCinco;
	
	public function verificaNumero($numeroBase, $numeroRomano){
		$this->setNumeroBase($numeroBase);
		$this->setNumeroRomano($numeroRomano);
		if ($this->numeroBase >= 9) {
			$this->numeroRomano .= self::NOVE;
			$this->numeroBase -= 9;
			$this->verificaNumero($this->numeroBase, $this->numeroRomano);
		} else {
			$this->objectCinco = new Cinco();
			$this->objectCinco->verificaNumero($this->numeroBase, $this->numeroRomano);
		}
	}
}