<?php

const QUATRO = 'IV';

class Quatro extends romanorules {
	
	private $objectUm;
	
	public function verificaNumero($numeroBase, $numeroRomano){
		$this->setNumeroBase($numeroBase);
		$this->setNumeroRomano($numeroRomano);
		if ($this->numeroBase >= 4) {
			$this->numeroRomano .= self::QUATRO;
			$this->numeroBase -= 4;
			$this->verificaNumero($this->numeroBase, $this->numeroRomano);
		} else {
			$this->objectUm = new Um();
			$this->objectUm->verificaNumero($this->numeroBase, $this->numeroRomano);
		}
	}
}