<?php

/* Autor: Alex Serejo da Silva
 *	ano 2019 - Setembro
 */

class Moto{
	
	public $potencia;

	public function ligarMotos(){

	echo "O motor esta ligado {$this->potencia}...";

	}
}

$m = new Moto;
$m->potencia = "3500";
$m->ligarMotos();