<?php
require_once 'model/alumno.entidad.php';
require_once 'model/alumno.model.php';

class alumnoController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new productoModel();
    }
    
    public function Index(){
        require_once 'view/header.php';
        require_once 'view/alumno/alumno.php';
        require_once 'view/footer.php';
    }
    
    public function Crud(){
        $alm = new producto();
        
        if(isset($_REQUEST['cod_prod'])){
            $alm = $this->model->Obtener($_REQUEST['cod_prod']);
        }
        
        require_once 'view/header.php';
        require_once 'view/alumno/alumno-editar.php';
        require_once 'view/footer.php';
    }
    
    public function Guardar(){
        $alm = new producto();
        
        $alm->__SET('cod_prod',             $_REQUEST['cod_prod']);
        $alm->__SET('nom_pro',             $_REQUEST['nom_pro']);
        $alm->__SET('prec_pro',            $_REQUEST['prec_pro']);
        $alm->__SET('desc_pro',            $_REQUEST['desc_pro']);
        $alm->__SET('img_pro',             $_REQUEST['img_pro']);
        $alm->__SET('estado_pro',          $_REQUEST['estado_pro']);
        $alm->__SET('fecha_ingreso',       $_REQUEST['fecha_ingreso']);
		$alm->__SET('cat_nom_cat',             $_REQUEST['cat_nom_cat']);
        $alm->__SET('usuario_id_usu',          $_REQUEST['usuario_id_usu']);
        $alm->__SET('usuario_tipo_tipo_doc',       $_REQUEST['usuario_tipo_tipo_doc']);
        
        if( !empty( $_FILES['img_pro']['name'] ) ){
            $img_pro = date('ymdhis') . '-' . strtolower($_FILES['img_pro']['name']);
            move_uploaded_file ($_FILES['img_pro']['tmp_name'], 'uploads/' . $img_pro);
            
            $alm->__SET('img_pro', $img_pro);
        }

        if($alm->__GET('cod_prod') != '' ? 
           $this->model->Actualizar($alm) : 
           $this->model->Registrar($alm));
        
        header('Location: index.php');
    }
    
    
    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['cod_prod']);
        header('Location: index.php');
    }
}