<?php

const NOVECENTOS = 'CM';

class Novecentos extends romanorules {	
	
	private $objectQuinhentos;
	
	public function verificaNumero($numeroBase, $numeroRomano){
		$this->setNumeroBase($numeroBase);
		$this->setNumeroRomano($numeroRomano);
		if ($this->numeroBase >= 900) {
			$this->numeroRomano .= self::NOVECENTOS;
			$this->numeroBase -= 900;
			$this->verificaNumero($this->numeroBase, $this->numeroRomano);
		} else {
			$this->objectQuinhentos = new Quinhentos();
			$this->objectQuinhentos->verificaNumero($this->numeroBase, $this->numeroRomano);
		}
	}
	
}