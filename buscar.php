<?php
/*$matricula = $_REQUEST['matricula'];
$finicio = $_REQUEST['inicio'];
$ffin = $_REQUEST['fin'];
$hrs = $_REQUEST['hrs'];



echo "Matricula: $matricula<br>";
echo "Fecha de Inicio: $finicio<br>";
echo "Fecha de Finalizacion: $ffin<br>";
echo "Horas: $hrs<br>";

$link = mysqli_connect("localhost","root","");
mysqli_select_db($link,"practicantes");


$resultado=mysqli_query($link,"select * from alumnos where matricula = $matricula");
	while($row=mysqli_fetch_array($resultado))
			{
				
				$matricula = $row['matricula'];
				$nom=$row['nombre'];
				$licenciatura = $row['licenciatura'];
				$folio = $row['folio'];
				$programa = $row['programa'];


				echo "<br>Matricula: $matricula<br><br>";
				echo "<br>Nombre: $nom<br><br>";
				echo "<br>Licenciatura: $licenciatura<br><br>";
				echo "<br>Folio: $folio<br><br>";	
				echo "<br>Programa: $programa<br><br>";
			}	

	mysqli_close($link);*/
require './vendor/autoload.php';
use Spipu\Html2Pdf\Html2Pdf;

ob_start();
	require_once 'print_view.php';
	$html = ob_get_clean();

	$html2Pdf = new Html2Pdf('P','letter','es','true','UTF-8');
	$html2Pdf -> writeHTML($html);
	$html2Pdf -> output();




?>