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
	<title>Nuevo empleado</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="styles/styles.css">
	<script src="js/main.js"></script>
	<script src="js/empleado.js"></script>
</head>
<body>
	<?php
		echo file_get_contents('./header_user.html');
	?>
	<div class="container">
		<header>
			<h2>Nuevo empleado</h2><br>
			<p>
				En este apartado se pueden registrar nuevos empleados:
			</p>
		</header>
		<form method="POST" onsubmit="event.preventDefault();
			empleado.alta($('#nombre').val(), $('#correo').val(), $('#curp').val(), $('#rfc').val(), $('#contratacion').val(), $('#nacimiento').val());"
		>
			<input class="form-control mb-sm-3" type="text" placeholder="Nombre del empleado" id="nombre" required/>
			<input class="form-control mb-sm-3" type="email" placeholder="Correo del empleado" id="correo" required/>
			<input class="form-control mb-sm-3" type="text" placeholder="CURP del empleado" id="curp" required/>
			<input class="form-control mb-sm-3" type="text" placeholder="RFC del empleado" id="rfc" required/>
			<label for="contratacion">Fecha de contratación:</label>
			<input class="form-control mb-sm-3" type="date" id="contratacion"/>
			<label for="nacimiento">Fecha de nacimiento:</label>
			<input class="form-control mb-sm-3" type="date" id="nacimiento"/>
			<div class="text-center">
				<input class="btn btn-primary mb-sm-3" type="submit" value="Enviar datos"/>
			</div>
		</form>
	</div>
	<script>
		let today = new Date().toISOString().slice(0, 10);
		$('#contratacion').val(today);
	</script>
</body>