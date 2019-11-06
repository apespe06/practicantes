<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Practicantes</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>


<header class="header">
	<div class="contenedor logo-contenedor">
		
			<a href="/">
				<img src="img/logo1.png" width="110px" alt="Ubicar Logo">
			</a>
				
			<h1>Facultad de Ciencias de la Computación</h1>
			<h1>Practicas Profesionales</h1>
				
			<a href="/">
				<img src="img/logo3.png" width="110px" alt="Ubicar Logo">
			</a>
			
		
			
	</div>	
</header>

<body>



	<form action = "buscar.php" method = "POST" id="busca">
	
	<p>Matricula:</p>
	<input id="matricula" type="text" class="field" name="matricula">
	<br><br>

	<p>Fecha de Inicio:</p>
	<input id = "inicio" type = "date" class="field" name = "inicio">
	<br><br>

	<p>Fecha de Finalizacion:</p>
	<input id = "fin" type = "date" class="field" name = "fin">
	<br><br>

	<p>Numero de hrs.:</p>
	<input type = "text" class="field" name="hrs" id="hrs">
	<br><br>

	<p class="center-content">
	<input type="submit" value="Buscar" name="crear" id="crear" class="boton" />
	</p>

    </form>




	<script src="jqueryv3.4.1.js"></script>

	<script type="text/javascript">
		$(document).ready(function(){
			$("#crear").click(function(){
			var matricula = $('#matricula').val();
			var horas = $('#hrs').val();

			if (matricula == ""){
				alert("Ingresa una matricula");
				return false;			
			}

			if (horas < 250){
				alert("Estas muy mal, no puedes terminar en menos de 250 hrs");
				return false;
			}
		


				//alert(matricula);
		
					
			}); 

		}); 		

	</script>

</body>
</html>