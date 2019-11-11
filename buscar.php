<?php
$matricula = $_REQUEST['matricula'];


$link = mysqli_connect("localhost","root","");
mysqli_select_db($link,"practicantes");


$resultado=mysqli_query($link,"select * from alumnos where matricula = $matricula");
	while($row=mysqli_fetch_array($resultado))
			{
				
				$matricula = $row['matricula'];
				$nom=$row['nombre'];
		
			}	

	mysqli_close($link);

require './vendor/autoload.php';
use Spipu\Html2Pdf\Html2Pdf;

ob_start();
	require_once 'print_view.php';
	$html = ob_get_clean();

	$html2Pdf = new Html2Pdf('P','LETTER','es','true','UTF-8');
	$html2Pdf -> writeHTML($html);
	$html2Pdf -> output();

	
	$html2Pdf -> output('C:\wamp64\www\practicantes\ '.$nom.'.pdf','F');




?>