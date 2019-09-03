<?php
/*
	@utor: Alex Serejo	
*	Criando uma classe com seus atributos publicos
*/

class Computador{
	public $cpu;
//Ciando o metodo de ligar...
	public function ligar()
	{
		echo "O computador esta sendo ligado a {$this->cpu}...";
	}
}

$obj = new Computador;
$obj->cpu = "500Mhz";
$obj->ligar();