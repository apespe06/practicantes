<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Practicantes</title>
</head>
<body>



	<form action = "buscar.php" method = "POST" id="busca">
	
	Matricula:
	<input id = "matricula" type = "text" name="matricula">
	<br><br>

	Fecha de Inicio:
	<input id = "inicio" type = "date" name = "inicio">
	<br><br>

	Fecha de Finalizacion:
	<input id = "fin" type = "date" name = "fin">
	<br><br>

	Numero de hrs.:
	<input type = "text" name="hrs" id="hrs">
	<br><br>


	<input type="submit" value="Búsqueda" name="crear" id="crear" />

</form>


	<script src="jqueryv3.4.1.js"></script>

	<script type="text/javascript">
		$(document).ready(function(){
			$("#crear").click(function(){
			var matricula = $('#matricula').val();
			var horas = $('#hrs').val();

			if (matricula == ""){
				alert("Estas mal");
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