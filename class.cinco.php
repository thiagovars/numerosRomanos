<?php

const CINCO = 'V';

class Cinco extends romanorules {
	
	private $objectQuatro;
	
	public function verificaNumero($numeroBase, $numeroRomano){
		$this->setNumeroBase($numeroBase);
		$this->setNumeroRomano($numeroRomano);
		if ($this->numeroBase >= 5) {
			$this->numeroRomano .= self::CINCO;
			$this->numeroBase -= 5;
			$this->verificaNumero($this->numeroBase, $this->numeroRomano);
		} else {
			$this->objectQuatro = new Quatro();
			$this->objectQuatro->verificaNumero($this->numeroBase, $this->numeroRomano);
		}
	}
}