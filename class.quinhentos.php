<?php

const QUINHENTOS = 'D';

class Quinhentos extends romanorules {
	
	private $objectQuatrocentos;
	
	public function verificaNumero($numeroBase, $numeroRomano){
		$this->setNumeroBase($numeroBase);
		$this->setNumeroRomano($numeroRomano);
		if ($this->numeroBase >= 500) {
			$this->numeroRomano .= self::QUINHENTOS;
			$this->numeroBase -= 500;
			$this->verificaNumero($this->numeroBase, $this->numeroRomano);
		} else {
			$this->objectQuatrocentos = new Quatrocentos();
			$this->objectQuatrocentos->verificaNumero($this->numeroBase, $this->numeroRomano);
		}
	}
}