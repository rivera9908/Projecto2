<?php

class AlumnoModel
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

            $stm = $this->pdo->prepare("SELECT * FROM ingredientes");
            $stm->execute();

            foreach($stm->fetchAll(PDO::FETCH_OBJ) as $r)
            {
                $alm = new Alumno();

                $alm->__SET('Cod_ingrediente', $r->Cod_ingrediente);
                $alm->__SET('Nom_ing', $r->Nom_ing);
                $alm->__SET('Valor_ing', $r->Valor_ing);
                $alm->__SET('Can_existente', $r->Can_existente);
                $alm->__SET('stock_max', $r->stock_max);
				$alm->__SET('stock_min', $r->stock_min);
				$alm->__SET('estado_ING', $r->estado_ING);
				$alm->__SET('Peso_ing', $r->Peso_ing);
				$alm->__SET('Proveedor_idproveedor', $r->Proveedor_idproveedor);



                $result[] = $alm;
            }

            return $result;
        }
        catch(Exception $e)
        {
            die($e->getMessage());
        }
    }

    public function Obtener($Cod_ingrediente)
    {
        try 
        {
            $stm = $this->pdo
                      ->prepare("SELECT * FROM ingredientes WHERE Cod_ingrediente = ?");
                      



            $stm->execute(array($Cod_ingrediente));
            $r = $stm->fetch(PDO::FETCH_OBJ);

            $alm = new Alumno();

            
                $alm->__SET('Cod_ingrediente', $r->Cod_ingrediente);
                $alm->__SET('Nom_ing', $r->Nom_ing);
                $alm->__SET('Valor_ing', $r->Valor_ing);
                $alm->__SET('Can_existente', $r->Can_existente);
                $alm->__SET('stock_max', $r->stock_max);
				$alm->__SET('stock_min', $r->stock_min);
				$alm->__SET('estado_ING', $r->estado_ING);
				$alm->__SET('Peso_ing', $r->Peso_ing);
				$alm->__SET('Proveedor_idproveedor', $r->Proveedor_idproveedor);

            return $alm;
        } catch (Exception $e) 
        {
            die($e->getMessage());
        }
    }

    public function Eliminar($Cod_ingrediente)
    {
        try 
        {
            $stm = $this->pdo
                      ->prepare("DELETE FROM ingredientes WHERE Cod_ingrediente = ?");                      

            $stm->execute(array($Cod_ingrediente));
        } catch (Exception $e) 
        {
            die($e->getMessage());
        }
    }

    public function Actualizar(Alumno $data)
    {
        try 
        {
            $sql = "UPDATE ingredientes SET 
                        Nom_ing             = ?,
                        Valor_ing           = ?, 
                        Can_existente       = ?, 
					    stock_max           = ?, 
						stock_min           = ?, 
					    estado_ING          = ?, 
					    Peso_ing            = ?,
						Proveedor_idproveedor  = ?
                    WHERE Cod_ingrediente= ?";

            $this->pdo->prepare($sql)
                 ->execute(
                array(
                $data->__GET('Nom_ing'),
                $data->__GET('Valor_ing'),
                $data->__GET('Can_existente'),
                $data->__GET('stock_max'),
				$data->__GET('stock_min'),
				$data->__GET('estado_ING'),
				$data->__GET('Peso_ing'),
				$data->__GET('Proveedor_idproveedor'),
				$data->__GET('Cod_ingrediente')
                    )
                );
        } catch (Exception $e) 
        {
            die($e->getMessage());
        }
    }

    public function Registrar(Alumno $data)
    {
        try 
        {
        $sql = "INSERT INTO ingredientes (Cod_ingrediente, Nom_ing,Valor_ing,Can_existente,stock_max,stock_min,estado_ING,Peso_ing,Proveedor_idproveedor) 
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

        $this->pdo->prepare($sql)
             ->execute(
            array(
                $data->__GET('Cod_ingrediente'),
                $data->__GET('Nom_ing'),
                $data->__GET('Valor_ing'),
                $data->__GET('Can_existente'),
                $data->__GET('stock_max'),
				$data->__GET('stock_min'),
				$data->__GET('estado_ING'),
				$data->__GET('Peso_ing'),
				$data->__GET('Proveedor_idproveedor')
                )
            );
			
        } catch (Exception $e) 
        {
            die($e->getMessage());
        }
    }
}

?>

