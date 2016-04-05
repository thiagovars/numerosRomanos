<?php	

const MIL = 'M';

class Mil extends romanorules {
	
	private $objectNovecentos;
	
	public function verificaNumero($numeroBase, $numeroRomano){
		$this->setNumeroBase($numeroBase);
		$this->setNumeroRomano($numeroRomano);
		
		if ($this->numeroBase >= 1000) {
			$this->numeroRomano .= self::MIL;
			$this->numeroBase -= 1000;
			$this->verificaNumero($this->numeroBase, $this->numeroRomano);
		} else {
			$this->objectNovecentos = new Novecentos();
			$this->objectNovecentos->verificaNumero($this->numeroBase, $this->numeroRomano);
		}
	}
	
}