<?php
	require_once('./php/includes/util.inc.php');
	if(empezar_sesion())
		header('Location: index.php');
?>
<html lang="en">
<head>
	<link rel="shortcut icon" href="img\logo.jpeg">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Inicio de sesión</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="styles/styles.css">
	<link rel="stylesheet" href="styles/forms.css">
	<link rel="stylesheet" href="Ventanas.css" />
	<script src="js/main.js"></script>
	<script>
		function iniciar_sesion(){
			var usuario = $("#correo").val(), pass = $("#contrasenia").val();
			$.ajax({
				method : "POST",
				url : "http://localhost/segcab/php/usuarios/login.php",
				data : {
					correo : usuario,
					contrasenia : pass
				},
				success : (data) => {
					if(data.exito)
						location.reload();
					else
						alert("Malo");
				},
				error : (jqXHR, textStatus, errorThrown) => {
					console.log(jqXHR, textStatus, errorThrown);
				}
			});
		}
	</script>
</head>
<body>
	<?php
		require_once('./php/includes/util.inc.php');
		if(!empezar_sesion())
			echo file_get_contents('./header.html');
		else
			echo file_get_contents('./header_user.html');
	?>
	<div class="container mb-sm-3">
		<br>
		<form method="post" onsubmit="event.preventDefault(); iniciar_sesion();">
			<input class="form-control mb-sm-3" type="text" placeholder="Correo" id="correo"/>
			<input class="form-control mb-sm-3" type="password" placeholder="Contraseña" id="contrasenia"/>
			<div class="text-center">
				<input class="btn btn-primary mb-sm-3" type="submit" value="Iniciar sesión" id="submit"/>
			</div>
		</form>
	</div>
</html>