<!DOCTYPE HTML>
<html lang="es">
	<head>
		<meta charset="utf-8">
		
		<style type="text/css">

			.presentacion{
				margin-top: 150px;
				margin-left: 150px;
				font-size: 12px;
				color: blue;
				
			}

			.pre{
				margin: 0 auto;
				text-indent: 1cm;
			}

			#uno{
				padding: 60px
				margin-right: 30px;
				margin-left: 150px;
				font-size: 12px;
				color: blue;
			}

			#dos{
				text-indent: 50px;
			}

			.datos{
				margin-right: 30px;
				margin-left: 150px;
				font-size: 11px;

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

			 .espacio{
					height:10px;
					background-color: white;
				}


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
				$licenciatura = $row['licenciatura'];
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

		
		<div class="presentacion">
			<p class="pre">Dra. María del Carmen Lara Muñoz</p>
			<p class="pre">Directora del Servicio Social</p>
			<p class="pre">B U A P </p>
			<p class="pre">R E S E N T E</p>

		</div>

		<div id="uno">
			<p id="dos">Por medio de la presente, nos permitimos hacer constar que el (la) estudiante, cuyos generales se enlistan, cumplió satisfactoriamente su practica profesional con base en la normatividad vigente.</p>
		</div>

		<div>			
			<table class="datos">
				<tr>
					<td class="a">Nombre del alumno:</td>
					<td class="b"><?php echo $nom; ?></td>
				</tr>
				<tr class="espacio"></tr>
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
					<td class="b"><?php echo $finicio ?></td>
				</tr>
				<tr>
					<td class="a">Fecha de término de la práctica profesional:</td>
					<td class="b"><?php echo $ffin ?></td>
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

		<div class="presentacion">
			<p class="pre">A T E N T A M E N T E </p>
			<p class="pre">“PENSAR BIEN, PARA VIVIR MEJOR”</p>
			<p class="pre">H. Puebla de Z., 25 de Abril de 2019</p>
			
		</div>

		<div class="presentacion">
			<p class="pre">M.C. Carlos Zamora Lima</p>
			<p class="pre">Coordinador de Práctica Profesional</p>
			<p class="pre">Facultad de Ciencias de la Computación</p>
			
		</div>

	
	</body>

</html> 