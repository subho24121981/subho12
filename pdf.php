<?php
require('fpdf.php');
require("file.php");
$conn=getconn();
authorization();


						
    	
		 $sql = "select * from subject" ;
  		 $stmt = $conn->prepare($sql);
         $stmt->execute();	
	
        $result=$stmt->setFetchMode(PDO::FETCH_ASSOC);
		$row =$stmt->fetchAll();
		
  	        	          			
      			 


$pdf = new FPDF();


//$pdf->Output();


$pdf = new FPDF();

$pdf->AddPage();
$pdf->SetFont('Arial','B',16);

foreach ((array)$row as  $key=>$data)
{
	$arraydata = implode(',',$data);
    $pdf->Write(5, "$key:$arraydata"); //write
    $pdf->Ln(10); // new line
}
$pdf->Output(); 
?>