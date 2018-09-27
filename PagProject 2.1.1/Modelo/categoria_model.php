<?php
//Creamos la funcion conextar base de datos con sus clases //
class Nom_catModel
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

	public function Registrar_categoria (Nom_cat $data)
	{
		try
		{
		$sql = "INSERT INTO categoriadelproducto (Nom_cat,estado_cat) VALUES (?,?)";
		

		$this->pdo->prepare($sql)
			 ->execute(
			 array(
			 	$data->__GET('Nom_cat'),
				$data->__GET('estado_cat')
			    )	
			 );       	
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

// Esta funcion nos permite listar datos //

	public function Listar_categoria ()
	{
		try 
		{
			$result = array();
			
			$stm = 	$this->pdo->prepare("SELECT * FROM categoriadelproducto");
			 $stm->execute();

			 foreach ($stm->fetchAll(PDO::FETCH_OBJ) as $r)
			 {
			 	$Nom_cat = new Nom_cat();

				$Nom_cat->__SET('Nom_cat', $r->Nom_cat);
				$Nom_cat->__SET('estado_cat', $r->estado_cat);

				$result[] = $Nom_cat;			 	
			 }	

			 return $result;
		}
		catch (Exception $e)
		{
			die($e->getMessage());
		}	
	}

//Esta funcion  permite obtener los datos registrados//	

	public function Obtener_categoria($Nom_cat)
	{
		try
		{
			$stm = $this->pdo
				->prepare("SELECT * FROM categoriadelproducto WHERE Nom_cat = ?");


			$stm-> execute(array($Nom_cat));
			$r =$stm->fetch(PDO::FETCH_OBJ);

			$Nom_cat = new Nom_cat();

				$Nom_cat->__SET('Nom_cat', $r->Nom_cat);
				$Nom_cat->__SET('estado_cat', $r->estado_cat);

			return $Nom_cat;	 		
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

//  Esta funcion nos permita Actualizar los datos registrados//
	public function Actualizar_categoria(Nom_cat $data)
	{
		try
		{
			$sql ="UPDATE categoriadelproducto SET 
			         Nom_cat = ?,
					 estado_cat = ?
					 WHERE Nom_cat =?";

			$this->pdo->prepare($sql)
				 ->execute(
				 array (
				 	$data->__GET('Nom_cat2'),
				 	$data->__GET('estado_cat'),
				 	$data->__GET('Nom_cat')
				 		)		
				 );
		} catch (Exception $e)
		{
			die($e->getMessage());	
		}
	}

	// Esta funcion nos permite eliminar un registro//
	
	public function Eliminar_categoria($Nom_cat)
	{
		try
		{
			$stm = $this->pdo
				->prepare("DELETE FROM categoriadelproducto WHERE Nom_cat =?");

			$stm->execute(array($Nom_cat));		 
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

}
?>