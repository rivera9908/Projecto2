
<?php
	include 'plantilla.php';
	require '../Usuario/conexion.php';
	
	$query = "SELECT  * FROM compra";
	$resultado = mysqli_query($con, $query);
	
	$pdf = new PDF();
	$pdf->AliasNbPages();
	$pdf->AddPage();
	
	$pdf->SetFillColor(232,232,232);
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(20,6,'N.I.',1,0,'C',1);
	$pdf->Cell(20,6,'T.D.',1,0,'C',1);
	$pdf->Cell(45,6,'Nombre de Usuario',1,1,'C',2);
	/*$pdf->Cell(45,6,'Producto',3,0,'C',1);
	$pdf->Cell(70,6,'Precio del Producto',1,3,'C',1);
	$pdf->Cell(20,6,'Cantidad',1,4,'C',1);
	$pdf->Cell(70,6,'Total',1,5,'C',1);
	$pdf->Cell(70,6,'Fecha de compra',1,6,'C',1);
	*/
	$pdf->SetFont('Arial','',10);
	
	while($row = $resultado->fetch_assoc())
	{
		$pdf->Cell(20,6,utf8_decode($row['Usuario_Id_usu']),1,0,'C');
		$pdf->Cell(20,6,$row['Usuario_Tipo_doc_Tipo_doc'],1,0,'C');
		$pdf->Cell(45,6,utf8_decode($row['Nom_usu']),1,1,'C');
	/*	$pdf->Cell(45,6,utf8_decode($row['Nom_pro']),3,0,'C');
		$pdf->Cell(20,6,$row['Prec_pro'],1,3,'C');
		$pdf->Cell(70,6,utf8_decode($row['Cant']),1,4,'C');
		$pdf->Cell(70,6,utf8_decode($row['Total']),1,5,'C');
		$pdf->Cell(20,6,$row['Fecha'],1,6,'C');
	
*/
	}
	$pdf->Output();
?>
