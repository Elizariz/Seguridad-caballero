<!DOCTYPE html>
<html lang="es">
<head>
	<link rel="shortcut icon" href="img/logo.jpeg">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Seguridad Caballero</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="styles/styles.css">
	<script src="js/main.js"></script>
	<script src="js/cliente.js"></script>
</head>
<body>
	<?php
		echo file_get_contents('./header_user.html');
	?>
	<div class="container">
		<header class="showcase">
			<h2>Generar encuesta de satisfacción</h2>
		</header>
		<form>
			<select class="form-control mb-sm-3" id="clientes" onchange="generar(this.value)">
				<option value="" selected disabled>Selecciona al cliente</option>
			</select>
			<input type="text" readonly placeholder="Selecciona un cliente para generar el link" id="link" class="form-control mb-sm-3"/>
		</form>
		<img src="./img/chika-sign.png" style="filter: brightness(0);" class="position-absolute bottom-0 end-0 opacity-25" width="50" height="50"/>
	</div>
</body>
<script>
	cliente.listar((response) => {
		for(var i=0; i<response.length; ++i){
			var opt = $('<option></option>').val(response[i].codigo_contrato).text(`${response[i].codigo_contrato} | ${response[i].nombre_cliente}`);
			$('#clientes').append(opt);
		}
	});
	function generar(id){
		$('#link').val(`http://localhost/segcab/satisfaccion.php?codigo=${btoa(id)}`);
	}
</script>
</html>