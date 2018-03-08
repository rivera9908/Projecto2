<?php
//Creamos la funcion conextar base de datos con sus clases //
class RolModel
{
	private $pdo;

	public function __CONSTRUCT()
	{ 

		try {
		 $this->pdo= database::conectar();
	    } catch (Exception $ex)	{
	    	die($e->getMessage());
	    }		
	}

// Esta funcion nos permite registrar datos en la BD//

	public function Registrar_Rol (Rol $data)
	{
		try
		{
		$sql = "CALL pa_registrar_rol (?,?);";
		

		$this->pdo->prepare($sql)
			 ->execute(
			 array(
			 	$data->__GET('Rol'),
				$data->__GET('estado_rol')
			    )	
			 );       	
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

// Esta funcion nos permite listar datos //

	public function Listar_Rol ()
	{
		try 
		{
			$result = array();
			
			$stm = 	$this->pdo->prepare("CALL pa_listar_rol()");
			 $stm->execute();

			 foreach ($stm->fetchAll(PDO::FETCH_OBJ) as $r)
			 {
			 	$rol = new Rol();

				$rol->__SET('Rol', $r->Rol);
				$rol->__SET('estado_rol', $r->estado_rol);

				$result[] = $rol;			 	
			 }	

			 return $result;
		}
		catch (Exception $e)
		{
			die($e->getMessage());
		}	
	}

//Esta funcion  permite obtener los datos registrados//	

	public function Obtener_Rol($Rol)
	{
		try
		{
			$stm = $this->pdo
				->prepare("SELECT * FROM rol WHERE Rol = ?");


			$stm-> execute(array($Rol));
			$r =$stm->fetch(PDO::FETCH_OBJ);

			$rol = new Rol();

				$rol->__SET('Rol', $r->Rol);
				$rol->__SET('estado_rol', $r->estado_rol);

			return $rol;	 		
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

//  Esta funcion nos permita Actualizar los datos registrados//
	public function Actualizar_Rol(Rol $data)
	{
		try
		{
			$sql ="CALL pa_Actualizar_rol(?,?,?);";

			$this->pdo->prepare($sql)
				 ->execute(
				 array (
				 	$data->__GET('Rol2'),
				 	$data->__GET('estado_rol'),
				 	$data->__GET('Rol')
				 		)		
				 );
		} catch (Exception $e)
		{
			die($e->getMessage());	
		}
	}

	// Esta funcion nos permite eliminar un registro//
	
	public function Eliminar_Rol($Rol)
	{
		try
		{
			$stm = $this->pdo
				->prepare("call pa_eliminar_rol (?);");

			$stm->execute(array($Rol));		 
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

}
?>