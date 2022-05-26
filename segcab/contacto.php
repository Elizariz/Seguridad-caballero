<!DOCTYPE html>
<html lang="es">
<head>
	<link rel="shortcut icon" href="img/logo.jpeg">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Contacto</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="styles/styles.css">
	<script src="js/main.js"></script>
	<script src="js/contact.js"></script>
</head>
<body>
	<?php
		require_once('./php/includes/util.inc.php');
		if(!empezar_sesion())
			echo file_get_contents('./header.html');
		else
			echo file_get_contents('./header_user.html');
	?>
	<div class="container">
		<header class="showcase">
			<h2>Contacto</h2>
			<p>
				¿Quieres contactarnos? Escribe tu mensaje y uno de nuestros representantes se pondrá en contacto tan pronto como sea posible.
			</p>
			<br/>
			<form onsubmit="event.preventDefault(); sendContact();" class="text-center" method="POST">
				<input class="form-control mb-sm-3" name="email" id="ctc_email" type="email" placeholder="Correo electrónico"/>
				<input class="form-control mb-sm-3" name="subject" id="ctc_subject" type="text" placeholder="Asunto"/>
				<textarea class="form-control mb-sm-3" name="message" id="ctc_message" placeholder="Tu mensaje"></textarea>
				<input class="btn btn-primary mb-sm-3" type="submit" name="submit" value="Enviar"/>
				<div id="message"></div>
			</form>
		</header>
	</div>
</body>
</html>