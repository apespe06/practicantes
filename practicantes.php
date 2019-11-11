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

		restaFechas = function(f1,f2)
		 {
		 var aFecha1 = f1.split('-');
		 var aFecha2 = f2.split('-');
		 var fFecha1 = Date.UTC(aFecha1[0],aFecha1[1]-1,aFecha1[2]);
		 var fFecha2 = Date.UTC(aFecha2[0],aFecha2[1]-1,aFecha2[2]);
		 var dif = fFecha2 - fFecha1;
		 var dias = Math.floor(dif / (1000 * 60 * 60 * 24));
		 return dias;
		 }

		$(document).ready(function(){
			$("#crear").click(function(){
			var matricula = $('#matricula').val();
			var horas = $('#hrs').val();

			var inicio = $('#inicio').val();
			var fin = $('#fin').val();
			var tiempo = restaFechas(inicio,fin);

			if (matricula == ""){
				alert("Ingresa una matricula");
				return false;			
			}

			if (tiempo < 90){
				alert("Estas super mal, no puedes terminar en " + tiempo + " dias es menor a 90 dias");
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