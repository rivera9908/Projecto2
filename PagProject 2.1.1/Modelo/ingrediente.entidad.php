<?php

class Alumno
{
    private $cod_ingrediente;
    private $Nom_ing;
    private $Valor_ing;
    private $cant_existente;
    private $Stock_max;
	 private $Stock_min;
	 private $Estado_ing;
	 private $Peso_ing;
	 private $PROVEEDOR_idPROVEEDOR;

    public function __GET($k){ return $this->$k; }
    public function __SET($k, $v){ return $this->$k = $v; }
}

?>
