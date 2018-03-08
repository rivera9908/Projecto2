<?php
    class producto
	{
        
		private $cod_prod;
		private $nom_pro;
        private $prec_pro;
        private $desc_pro;
        private $img_pro;
        private $estado_pro;
        private $fecha_ingreso;
        private $cat_nom_cat;
		private $usuario_id_usu;
        private $usuario_tipo_tipo_doc;

        public function __GET($k){ return $this->$k; }
        public function __SET($k, $v){ return $this->$k = $v; }
    }
	?>