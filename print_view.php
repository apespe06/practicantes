<!DOCTYPE HTML>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<title>Generar PDFS con PHP</title>
		<style type="text/css">
			
		</style>

	</head>
	<body>
		<?php 
			//var_dump($_POST); 
			$matricula = $_REQUEST['matricula'];
			$finicio = $_REQUEST['inicio'];
			$ffin = $_REQUEST['fin'];
			$hrs = $_REQUEST['hrs'];
			
			$link = mysqli_connect("localhost","root","");
			mysqli_select_db($link,"practicantes");
			
			$resultado=mysqli_query($link,"select * from alumnos where matricula = $matricula");
			while($row=mysqli_fetch_array($resultado)){
				$matricula = $row['matricula'];
				$nom=$row['nombre'];
				$lic = $row['licenciatura'];
				$folio = $row['folio'];
				$programa = $row['programa'];

				//echo "<br>Matricula: $matricula<br><br>";
				//echo "<br>Nombre: $nom<br><br>";
				//echo "<br>Licenciatura: $licenciatura<br><br>";
				//echo "<br>Folio: $folio<br><br>";	
				//echo "<br>Programa: $programa<br><br>";
			}	

			mysqli_close($link);

		?>



		<div>
			<p>Dra. María del Carmen Lara Muñoz</p>
			<p>Directora del Servicio Social </p>
			<p>B U A P </p>
			<P> R E S E N T E</p>

		</div>

		<div>
			<p>Por medio de la presente, nos permitimos hacer constar que el (la) estudiante, cuyos generales se enlistan, cumplió satisfactoriamente su practica profesional con base en la normatividad vigente.</p>
		</div>

		<div>
			
			<p>Nombre del alumno: <?php echo $nom; ?></p>
			<p>Matricula del alumno: <?php echo $matricula; ?></p>
			<p>Licenciatura: <?php echo $folio; ?></p>
			<p>Folio del programa: <?php echo $folio; ?></p>
			<p>Fecha de inicio de la práctica profesional:<?php echo $finicio; ?></p>
			<p>Fecha de término de la práctica profesional:<?php echo $ffin; ?></p>
			<p>Número de horas realizadas: <?php echo $hrs; ?></p>
		</div>


		<div>Sin más por agregar, reiteramos la seguridad de nuestra atenta y distinguida consideración.</div>
	
	</body>
</html> 