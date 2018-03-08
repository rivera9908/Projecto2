<h1 class="page-header">
    <?php echo $alm->__GET('cod_prod') != null ? $alm->__GET('Nom_pro') : 'Nuevo Registro'; ?>
</h1>

<ol class="breadcrumb">
  <li><a href="?c=Alumno">productos</a></li>
  <li class="active"><?php echo $alm->__GET('cod_prod') != null ? $alm->__GET('Nom_pro') : 'Nuevo Registro'; ?></li>
</ol>

<form id="frm-alumno" action="?c=Alumno&a=Guardar" method="post" enctype="multipart/form-data">
    <input type="hidden" name="cod_prod" value="<?php echo $alm->__GET('cod_prod'); ?>" />
    
    <div class="form-group">
        <label>Nombre</label>
        <input type="text" name="Nom_pro" value="<?php echo $alm->__GET('Nom_pro'); ?>" class="form-control" placeholder="Ingrese su nombre" data-validacion-tipo="requerido|min:3" />
    </div>
    
    <div class="form-group">
        <label>precio</label>
        <input type="text" name="prec_pro" value="<?php echo $alm->__GET('prec_pro'); ?>" class="form-control" placeholder="Ingrese su apellido" data-validacion-tipo="requerido|min:10" />
    </div>
    
    <div class="form-group">
        <label>descripcion</label>
        <input type="text" name="desc_pro" value="<?php echo $alm->__GET('desc_pro'); ?>" class="form-control" placeholder="Ingrese su correo electrónico" data-validacion-tipo="requerido|email" />
    </div>
    
    <div class="form-group">
        <label>estado</label>
        <select name="estado_pro" class="form-control">
            <option <?php echo $alm->__GET('estado_pro') == 1 ? 'selected' : ''; ?> value="1">activo</option>
            <option <?php echo $alm->__GET('estado_pro') == 2 ? 'selected' : ''; ?> value="2">inactivo</option>
        </select>
    </div>
	
    
    <div class="row">
        <div class="col-xs-6">
            <div class="form-group">
                <label>Foto</label>
                <input type="hidden" name="img_pro" value="<?php echo $alm->__GET('img_pro'); ?>" />
                <input type="file" name="img_pro" placeholder="Ingrese una imagen" />
            </div>     
        </div>
        <div class="col-xs-6">
            <?php if($alm->__GET('img_pro') != ''): ?>
                <div class="img-thumbnail text-center">
                    <img src="uploads/<?php echo $alm->__GET('img_pro'); ?>" style="width:50%;" />
                </div>
            <?php endif; ?>            
        </div>
    </div>
	<div class="form-group">
        <label>fecha</label>
        <input type="date" name="fecha_ingreso" value="<?php echo $alm->__GET('fecha_ingreso'); ?>" class="form-control" placeholder="Ingrese su correo electrónico" data-validacion-tipo="requerido|email" />
    </div>
	
	<div class="form-group">
        <label>categoria</label>
        <input type="text" name="cat_nom_cat" value="<?php echo $alm->__GET('cat_nom_cat'); ?>" class="form-control" placeholder="Ingrese su correo electrónico" data-validacion-tipo="requerido|email" />
    </div>
	
	<div class="form-group">
        <label>identificacion del usuario</label>
        <input type="text" name="usuario_id_usu" value="<?php echo $alm->__GET('usuario_id_usu'); ?>" class="form-control" placeholder="Ingrese su correo electrónico" data-validacion-tipo="requerido|email" />
    </div>
    
	<div class="form-group">
        <label>tipo de identificacion del usuario</label>
        <input type="text" name="usuario_tipo_tipo_doc" value="<?php echo $alm->__GET('usuario_tipo_tipo_doc'); ?>" class="form-control" placeholder="Ingrese su correo electrónico" data-validacion-tipo="requerido|email" />
    </div>
    
    <hr />
    
    <div class="text-right">
        <button class="btn btn-success">Guardar</button>
    </div>
</form>

<script>
    $(document).ready(function(){
        $("#frm-alumno").submit(function(){
            return $(this).validate();
        });
    })
</script>