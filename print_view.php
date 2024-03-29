
<!DOCTYPE HTML>
<html lang="es">
	<head>
		<meta charset="utf-8">

		<style type="text/css">


			.presentacion{
				margin-top: 100px;
				margin-left: 150px;
				font-size: 11px;
				font-family: letran;
				color: black;				
				
			}

			.presentacion2{
				margin-top: 100px;
				margin-left: 150px;
				font-size: 11px;
				font-family: letra;
				color: black;				
				
			}

			.pre{
				margin: 0 auto;
				text-indent: 1cm;
				margin-bottom: 6px;
				
			}

			#uno{
				width: 77%;
				padding: 60px
				margin-right: 30px;
				margin-left: 150px;
				font-size: 12px;
				color: black;
			}

			#dos{
				text-indent: 50px;
				font-family: letra;

			}

			span{
			
				font-family: letran;
			}

			.datos{
				margin-right: 30px;
				margin-left: 150px;
				font-size: 11px;
				font-family: letran;
				border-collapse: collapse;
  				
			}

			
			.a{
				width: 180px;
				padding: 7px;
				background-color: white;

			}

			.b{
				width: 270px;
				padding: 7px;

				border-bottom: 4px solid white;
  				background-color: #A6ABAB;				

			}		

			
		</style>
	</head>

	<body>
			<?php 
			header('Content-Type: text/html; charset=utf-8');
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
				$nom = utf8_encode($row['nombre']);
				$licenciatura = utf8_encode($row['licenciatura']);
				$folio = $row['folio'];
				$programa = $row['programa'];

				//echo "<br>Matricula: $matricula<br><br>";
				//echo "<br>Nombre: $nom<br><br>";
				//echo "<br>Licenciatura: $licenciatura<br><br>";
				//echo "<br>Folio: $folio<br><br>";	
				//echo "<br>Programa: $programa<br><br>";
			}	



			if ($licenciatura == 'Ing Ciencias Computación(ICC)') 
				$licenciatura = 'LICENCIATURA EN  INGENIERIA EN CIENCIAS DE LA COMPUTACIÓN';

			if ($licenciatura == 'Ciencias de la Computación(CCO)') 
				$licenciatura = 'LICENCIATURA EN CIENCIAS DE LA COMPUTACIÓN';

			if ($licenciatura == 'Ing.Tec.de la Información (ITI)') 
				$licenciatura = 'LICENCIATURA EN INGENIERÍA EN TECNOLOGÍAS DE LA INFORMACIÓN';
			



			function fecha($fecha){
				$fechaComoEntero = strtotime($fecha);
				$dia = date('d', $fechaComoEntero);
				$mes =  date('m', $fechaComoEntero);
				$año = date('Y', $fechaComoEntero);
				switch ($mes) {
					case '01':
						$mes = 'ENERO'; break;
					case '02':
						$mes = 'FEBRERO'; break;
					case '03':
						$mes = 'MARZO'; break;
					case '04':
						$mes = 'ABRIL'; break;
					case '05':
						$mes = 'MAYO'; break;
					case '06':
						$mes = 'JUNIO'; break;
					case '07':
						$mes = 'JULIO'; break;
					case '08':
						$mes = 'AGOSTO'; break;
					case '09':
						$mes = 'SEPTIEMBRE'; break;
					case '10':
						$mes = 'OCTUBRE'; break;
					case '11':
						$mes = 'NOVIEMBRE'; break;
					case '12':
						$mes = 'DICIEMBRE'; break;					
				}

				$fecha = $dia.' DE '.$mes.' DE '.$año ;
				return $fecha;
			}

			$resultado=mysqli_query($link,"delete from alumnos where matricula = $matricula");

			mysqli_close($link);

			?>

		
		<div class="presentacion">
			<p class="pre">Mtro. Flavio Marcelino Guzmán Sánchez</p>
			<p class="pre">Director del Servicio Social</p>
			<p class="pre">B U A P </p>
			<p class="pre">R E S E N T E</p>

		</div>

		<div id="uno">
			<p id="dos">Por medio de la presente, nos permitimos hacer constar que el (la) estudiante, cuyos generales se enlistan, cumplió satisfactoriamente su <span>practica profesional</span> con base en la normatividad vigente.</p>
		</div>

		<div>			
			<table class="datos">
				<tr>
					<td class="a">Nombre del alumno:</td>
					<td class="b"><?php echo $nom; ?></td>
				</tr>
				<tr>
					<td class="a">Matricula del alumno:</td>
					<td class="b"><?php echo $matricula ?></td>
				</tr>
				<tr>
					<td class="a">Licenciatura:</td>
					<td class="b"><?php echo $licenciatura ?></td>
				</tr>
				<tr>
					<td class="a">Folio del programa en el que realizo la práctica profesional:</td>
					<td class="b"><?php echo $folio ?></td>
				</tr>
				<tr>
					<td class="a">Fecha de inicio de la práctica profesional:</td>
					<td class="b"><?php echo fecha($finicio) ?></td>
				</tr>
				<tr>
					<td class="a">Fecha de término de la práctica profesional:</td>
					<td class="b"><?php echo fecha($ffin) ?></td>
				</tr>
				<tr>
					<td class="a">Número de horas realizadas:</td>
					<td class="b"><?php echo $hrs ?></td>
				</tr>


			</table>
		</div>

		<div id="uno">
			<p id="dos">Sin más por agregar, reiteramos la seguridad de nuestra atenta y distinguida consideración.</p>
		</div>

		<div class="presentacion2">
			<p class="pre">A T E N T A M E N T E </p>
			<p class="pre">“PENSAR BIEN, PARA VIVIR MEJOR”</p>
			<p class="pre">H. Puebla de Z., <?php date_default_timezone_set('UTC'); $hoy = date("Y-m-d");  echo fecha($hoy) ?></p>
			
		</div>

		<div class="presentacion2">
			<p class="pre">M.C. Carlos Zamora Lima</p>
			<p class="pre">Coordinador de Práctica Profesional</p>
			<p class="pre">Facultad de Ciencias de la Computación</p>
			
		</div>

	
	</body>

</html> 