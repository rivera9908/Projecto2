<?php
class tipo_doc
{ 

//Creacion de conexion DB y sus atributos//
	
	private $Tipo_doc;
	private $Tipo_doc2;
	private $Estado_tdoc;

	public function __GET($k){ return $this->$k; }
	public function __SET($k, $v){ return $this->$k = $v; }
}
?>