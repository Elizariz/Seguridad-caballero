<?php
require_once('./php/includes/util.inc.php');
if(!empezar_sesion()){
	header('Location: login.html');
	die();
}
?>
<!DOCTYPE html>
<head>
	<link rel="shortcut icon" href="img/logo.jpeg">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Nueva Ficha Delictiva</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="styles/styles.css">
	<script src="js/main.js"></script>
	<script src="js/ficha.js"></script>
</head>
<body>
	<?php
		echo file_get_contents('./header_user.html');
	?>
	<div class="container">
		<hr>
		<header>
			<h2>Nueva Ficha Delictiva</h2><br>
			<p>
				En este apartado por la presente se da de alta al detenido cuya informacion se anexa en seguida por medio de esta sección:
			</p>
		</header>
		<form method="POST" id="altaFicha" onsubmit="event.preventDefault();
			ficha.alta($('#nombre').val(), $('#edad').val(), $('#dedicacion').val(), $('#fecha').val(), $('#lugar').val(), $('#razon').val(), () => location.reload());"
		>
			<input type="text" class="form-control mb-sm-3" placeholder="Nombre del detenido" id="nombre" required/>
			<input type="number" class="form-control mb-sm-3" placeholder="Edad del detenido" id="edad" min="0" required/>
			<input type="text" class="form-control mb-sm-3" placeholder="Dedicación del detenido" id="dedicacion" required/>
			<label for="fecha">
				Fecha de detención:
			</label>
			<input type="date" class="form-control mb-sm-3" id="fecha" required/>
			<input type="text" class="form-control mb-sm-3" placeholder="Lugar de detención" id="lugar" required/>
			<input type="text" class="form-control mb-sm-3" placeholder="Razon de detención" id="razon" required/>
			<div class="text-center">
				<input type="submit" class="btn btn-primary mb-sm-3" value="Enviar datos"/>
			</div>
		</form>
	</div>
</body>