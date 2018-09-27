<?php
class Nom_cat
{ 

//Creacion de conexion DB y sus atributos//
	
	private $Nom_cat;
	private $Nom_cat2;
	private $estado_cat;

	public function __GET($k){ return $this->$k; }
	public function __SET($k, $v){ return $this->$k = $v; }
}
?>