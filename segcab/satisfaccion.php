<?php
	if(!isset($_GET['codigo']))
		header('Location: index.php');
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<link rel="shortcut icon" href="img/logo.jpeg">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Encuesta de satisfacción</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="styles/styles.css">
	<script src="js/main.js"></script>
</head>
<body>
	<?php
		echo file_get_contents('./header.html');
	?>
	<div class="container">
		<header class="showcase">
			<h2>Encuesta de satisfacción</h2>
		</header>
		<form onsubmit="event.preventDefault(); satisfaccion();">
			<label class="form-label mb-sm-3" for="codigo">¿Cuál es tu código de cliente?</label>
			<?php
				echo '<input type="text" readonly class="form-control mb-sm-3" id="codigo" value="' . base64_decode($_GET['codigo']) . '"/>';
			?>
			<label class="form-label">¿Qué tan probable es que recomiendes seguridad caballero a un amigo o colega?</label>
			<div id="radio" class="text-center mb-sm-3">
				<label class="form-check-label">1</label>
				<?php
					for($i=1; $i <= 10; $i++)
						echo "<input class='form-check-input mx-2' type='radio' name='calificacion' value='$i'/>";
				?>
				<label class="form-check-label">10</label>
			</div>
			<label class="form-label mb-sm-3" for="comentarios">¿Tienes comentarios?</label>
			<textarea id="comentarios" class="form-control mb-sm-3"></textarea>
			<div class="text-center mb-sm-3">
				<input type="submit" value="Enviar datos" class="btn btn-primary"/>
			</div>
		</form>
		<img src="./img/chika-sign.png" style="filter: brightness(0);" class="position-absolute bottom-0 end-0 opacity-25" width="50" height="50"/>
	</div>
</body>
<script>
	function satisfaccion(){
		if($('input[name="calificacion"]:checked').val())
			alert('Llenar datos');
		else
			$.ajax({
				method: "POST",
				url: "http://localhost/segcab/php/satisfaccion.php",
				data: {
					codigo: $('#codigo').val(),
					calificacion: $('input[name="calificacion"]:checked').val(),
					comentarios: $('#comentarios').val()
				},
				success: (response) => {
					if(response.exito)
						alert("Correo enviado");
					else
						alert("No se pudo enviar el correo");
				},
				error: (jqXHR, textStatus, errorThrown) => {
					location.reload();
					console.log(jqXHR, textStatus, errorThrown);
				}
			});
	}
</script>
</html>