<?php
class productoModel
{
	private $pdo;

	public function __CONSTRUCT()
	{
		try
		{
			$this->pdo = new PDO('mysql:host=localhost;dbname=fruteria_el_bosque', 'root', '');
			$this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);		        
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Listar()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM producto");
			$stm->execute();

			foreach($stm->fetchAll(PDO::FETCH_OBJ) as $r)
			{
				$alm = new producto();

				$alm->__SET('cod_prod', $r->cod_prod);
				$alm->__SET('nom_pro', $r->nom_pro);
				$alm->__SET('prec_pro', $r->prec_pro);
                $alm->__SET('desc_pro',  $r->desc_pro);
                $alm->__SET('img_pro',  $r->img_pro);
				$alm->__SET('estado_pro', $r->estado_pro);
				$alm->__SET('fecha_ingreso', $r->fecha_ingreso);
				$alm->__SET('cat_nom_cat',  $r->cat_nom_cat);
				$alm->__SET('usuario_id_usu',  $r->usuario_id_usu);
				$alm->__SET('usuario_tipo_tipo_doc', $r->usuario_tipo_tipo_doc);


				$result[] = $alm;
			}

			return $result;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Obtener($cod_prod)
	{
		try 
		{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM producto WHERE cod_prod = ?");
			          

			$stm->execute(array($cod_prod));
			$r = $stm->fetch(PDO::FETCH_OBJ);

			$alm = new producto();

			    $alm->__SET('cod_prod', $r->cod_prod);
				$alm->__SET('nom_pro', $r->nom_pro);
				$alm->__SET('prec_pro', $r->prec_pro);
                $alm->__SET('desc_pro',  $r->desc_pro);
                $alm->__SET('img_pro',  $r->img_pro);
				$alm->__SET('estado_pro', $r->estado_pro);
				$alm->__SET('fecha_ingreso', $r->fecha_ingreso);
				$alm->__SET('cat_nom_cat',  $r->cat_nom_cat);
				$alm->__SET('usuario_id_usu',  $r->usuario_id_usu);
				$alm->__SET('usuario_tipo_tipo_doc', $r->usuario_tipo_tipo_doc);


			return $alm;
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Eliminar($cod_prod)
	{
		try 
		{
			$stm = $this->pdo
			          ->prepare("DELETE FROM producto WHERE cod_prod = ?");			          

			$stm->execute(array($cod_prod));
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Actualizar(producto $data)
	{
		try 
		{
			$sql = "UPDATE producto SET 
						nom_pro         = ?, 
						prec_pro        = ?,
						desc_pro           = ?, 
						img_pro = ?,
                        estado_pro          = ?,
                        fecha_ingreso           = ?
						cat_nom_cat = ?,
                        usuario_id_usu          = ?,
                        usuario_tipo_tipo_doc           = ?
				    WHERE cod_prod = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				array(
					$data->__GET('nom_pro '), 
					$data->__GET('prec_pro'), 
					$data->__GET('desc_pro'),
					$data->__GET('img_pro'),
                    $data->__GET('estado_pro'),
                    $data->__GET('fecha_ingreso'),
					$data->__GET('cat_nom_cat'),
                    $data->__GET('usuario_id_usu'),
                    $data->__GET('usuario_tipo_tipo_doc'),
					$data->__GET('cod_prod')
					)
				);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Registrar(producto $data)
	{
		try 
		{
		$sql = "INSERT INTO producto (nom_pro ,prec_pro,desc_pro,img_pro,estado_pro,fecha_ingreso,cat_nom_cat,usuario_id_usu,usuario_tipo_tipo_doc) 
		        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

		$this->pdo->prepare($sql)
		     ->execute(
			array(
				$data->__GET('nom_pro '), 
					$data->__GET('prec_pro'), 
					$data->__GET('desc_pro'),
					$data->__GET('img_pro'),
                    $data->__GET('estado_pro'),
                    $data->__GET('fecha_ingreso'),
					$data->__GET('cat_nom_cat'),
                    $data->__GET('usuario_id_usu'),
                    $data->__GET('usuario_tipo_tipo_doc'),
					$data->__GET('cod_prod'),
				)
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
}
?>