<?php

const QUATROCENTOS = 'CD';

class Quatrocentos extends romanorules {
	
	private $objectCem;
	
	public function verificaNumero($numeroBase, $numeroRomano){
		$this->setNumeroBase($numeroBase);
		$this->setNumeroRomano($numeroRomano);
		if ($this->numeroBase >= 400) {
			$this->numeroRomano .= self::QUATROCENTOS;
			$this->numeroBase -= 400;
			$this->verificaNumero($this->numeroBase, $this->numeroRomano);
		} else {
			$this->objectCem = new Cem();
			$this->objectCem->verificaNumero($this->numeroBase, $this->numeroRomano);
		}
	}
}