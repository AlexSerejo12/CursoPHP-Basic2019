<?php

class Moto{
	
	public $potencia;

	public function ligarMotos(){

	echo "O motor esta ligado {$this->potencia}...";

	}
}

$m = new Moto;
$m->potencia = "3500";
$m->ligarMotos();