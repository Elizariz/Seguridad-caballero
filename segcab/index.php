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
	<link href="styles/carruzel.css" rel="stylesheet" type="text/css">
	<script src="js/main.js"></script>
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
			<h2>Seguridad Caballero</h2>
			<p>
				Siempre vigilante
			</p>
			<p>
				Nosotros en seguridad caballero nos comprometemos a cuidar de su bienestar y de su patrimonio, ¡porque para nosotros su bienestar es lo primero!
			</p>
		</header>
		<div class="container3">
			<ul class="slider">
				<li id="slide2">
					<img src="img/s2.jpg">
				</li>
				<li id="slide3">
					<img src="img/s3.jpg">
				</li>
				<li id="slide4">
					<img src="img/s4.jpg">
				</li>
				<li id="slide5">
					<img src="img/s1.jpeg">
				</li>
				<li id="slide6">
					<img src="img/s6.jpg">
				</li>
				<li id="slide7">
					<img src="img/s7.jpg">
				</li>
				<li id="slide8">
					<img src="img/s8.jpg">
				</li>
			</ul>
			<ul class="menu">
				<li>
					<a href="#slide2"></a>
				</li>
				<li>
					<a href="#slide3"></a>
				</li>
				<li>
					<a href="#slide4"></a>
				</li>
				<li>
					<a href="#slide5"></a>
				</li>
				<li>
					<a href="#slide6"></a>
				</li>
				<li>
					<a href="#slide7"></a>
				</li>
				<li>
					<a href="#slide8"></a>
				</li>
			</ul>
		</div>
		<img src="./img/chika-sign.png" style="filter: brightness(0);" class="position-absolute bottom-0 end-0 opacity-25" width="50" height="50"/>
	</div>
</body>
</html>