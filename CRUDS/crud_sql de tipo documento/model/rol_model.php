<?php
//Creamos la funcion conextar base de datos con sus clases //
class tipo_docModel
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

	public function Registrar_tipo_de_documento (Tipo_doc $data)
	{
		try
		{
		$sql = "INSERT INTO tipo_doc (Tipo_doc,Estado_tdoc) VALUES (?,?)";
		

		$this->pdo->prepare($sql)
			 ->execute(
			 array(
			 	$data->__GET('Tipo_doc'),
				$data->__GET('Estado_tdoc')
			    )	
			 );       	
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

// Esta funcion nos permite listar datos //

	public function Listar_tipo_de_documento ()
	{
		try 
		{
			$result = array();
			
			$stm = 	$this->pdo->prepare("SELECT * FROM tipo_doc");
			 $stm->execute();

			 foreach ($stm->fetchAll(PDO::FETCH_OBJ) as $r)
			 {
			 	$Tipo_doc = new tipo_doc();

				$Tipo_doc->__SET('Tipo_doc', $r->Tipo_doc);
				$Tipo_doc->__SET('Estado_tdoc', $r->Estado_tdoc);

				$result[] = $Tipo_doc;			 	
			 }	

			 return $result;
		}
		catch (Exception $e)
		{
			die($e->getMessage());
		}	
	}

//Esta funcion  permite obtener los datos registrados//	

	public function Obtener_tipo_de_documento($Tipo_doc)
	{
		try
		{
			$stm = $this->pdo
				->prepare("SELECT * FROM tipo_doc WHERE Tipo_doc = ?");


			$stm-> execute(array($Tipo_doc));
			$r =$stm->fetch(PDO::FETCH_OBJ);

			$Tipo_doc = new tipo_doc();

				$Tipo_doc->__SET('Tipo_doc', $r->Tipo_doc);
				$Tipo_doc->__SET('Estado_tdoc', $r->Estado_tdoc);

			return $Tipo_doc;	 		
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

//  Esta funcion nos permita Actualizar los datos registrados//
	public function Actualizar_tipo_de_documento(Tipo_doc $data)
	{
		try
		{
			$sql ="UPDATE tipo_doc SET 
			         Tipo_doc = ?,
					 Estado_tdoc = ?
					 WHERE Tipo_doc =?";

			$this->pdo->prepare($sql)
				 ->execute(
				 array (
				 	$data->__GET('Tipo_doc2'),
				 	$data->__GET('estado_rol'),
				 	$data->__GET('Tipo_doc')
				 		)		
				 );
		} catch (Exception $e)
		{
			die($e->getMessage());	
		}
	}

	// Esta funcion nos permite eliminar un registro//
	
	public function Eliminar_tipo_de_documento($Tipo_doc)
	{
		try
		{
			$stm = $this->pdo
				->prepare("DELETE FROM tipo_doc WHERE Tipo_doc =?");

			$stm->execute(array($Tipo_doc));		 
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

}
?>