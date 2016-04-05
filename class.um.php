<?php

class Um extends romanorules {
	
	const UM = 'I';
	
	public function verificaNumero($numeroBase, $numeroRomano){
		$this->setNumeroBase($numeroBase);
		$this->setNumeroRomano($numeroRomano);
		if ($this->numeroBase >= 1) {
			$this->numeroRomano .= self::UM;
			$this->numeroBase -= 1;
			$this->verificaNumero($this->numeroBase, $this->numeroRomano);
		} else {
			echo $this->numeroRomano;
			return $this->numeroRomano;
		}
	}
}