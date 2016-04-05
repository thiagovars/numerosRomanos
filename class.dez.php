<?php

class Dez extends romanorules {
	const DEZ = 'X';
	
	private $objectNove;
	
	public function verificaNumero($numeroBase, $numeroRomano){
		$this->setNumeroBase($numeroBase);
		$this->setNumeroRomano($numeroRomano);
		if ($this->numeroBase >= 10) {
			$this->numeroRomano .= self::DEZ;
			$this->numeroBase -= 10;
			$this->verificaNumero($this->numeroBase, $this->numeroRomano);
		} else {
			$this->objectNove = new Nove();
			$this->objectNove->verificaNumero($this->numeroBase, $this->numeroRomano);
		}
	}
}