<?php

spl_autoload_register(function ($class_name) {
    include 'class.'. strtolower($class_name) . '.php';
});


class numeroRomano extends romanorules {
	
	public function converteNumero($numeroBase) {
		$this->objectMil = new Mil();
		$this->setNumeroBase($numeroBase);
		$this->setNumeroRomano($this->objectMil->verificaNumero($numeroBase, $this->numeroRomano));
		return $this->numeroRomano;
	}
}