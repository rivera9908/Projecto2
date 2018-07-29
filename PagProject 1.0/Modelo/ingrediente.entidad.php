<?php

class Alumno
{
    private $Cod_ingrediente;
    private $Nom_ing;
    private $Valor_ing;
    private $Can_existente;
    private $stock_max;
	 private $stock_min;
	 private $estado_ING;
	 private $Peso_ing;
	 private $Proveedor_idproveedor;

    public function __GET($k){ return $this->$k; }
    public function __SET($k, $v){ return $this->$k = $v; }
}

?>
