<h1 class="page-header">productos</h1>

<div class="well well-sm text-right">
    <a class="btn btn-primary" href="?c=Alumno&a=Crud">Nuevo alumno</a>
</div>

<table class="table table-striped">
    <thead>
        <tr>
             <th style="width:180px;">Nombre</th>
            <th>precio</th>
            <th>descripcion</th>
			<th>estado del producto</th>
			<th style="width:120px;">foto</th>
            <th style="width:120px;">fecha de ingreso</th>
            <th style="width:120px;">categoria</th>
            <th style="width:120px;">identificacion del usuario</th>
            <th style="width:120px;">tipo de identificacion del usuario</th>
        </tr>
    </thead>    
    <?php foreach($this->model->Listar() as $r): ?>
        <tr>
            <td>
                <?php if($r->__GET('img_pro') != ''): ?>
                    <img src="uploads/<?php echo $r->__GET('img_pro'); ?>" style="width:100%;" />
                <?php endif; ?> 
            </td>
            <td><?php echo $r->__GET('nom_pro'); ?></td>
            <td><?php echo $r->__GET('prec_pro'); ?></td>
            <td><?php echo $r->__GET('desc_pro'); ?></td>
            <td><?php echo $r->__GET('estado_pro') == 1 ? 'activo' : 'inactivo'; ?></td>
            <td><?php echo $r->__GET('fecha_ingreso'); ?></td>
			<td><?php echo $r->__GET('cat_nom_cat'); ?></td>
			<td><?php echo $r->__GET('usuario_id_usu'); ?></td>
			<td><?php echo $r->__GET('usuario_tipo_tipo_doc'); ?></td>
            <td>
                <a href="?c=Alumno&a=Crud&cod_prod=<?php echo $r->cod_prod; ?>">Editar</a>
            </td>
            <td>
                <a onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?c=Alumno&a=Eliminar&cod_prod=<?php echo $r->cod_prod; ?>">Eliminar</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table> 
