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
	<title>Empleados</title>
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
			<h2>Clientes</h2><br>
			<p>Datos generales sobre los clientes:</p>
		</header>
	</div>
	<div class="panel panel-inverse" data-sortable-id="index-1">
			<div class="panel-body">
				<div class="table-responsive">
					<table id="clientes" class="table table-bordered mb-0 align-middle">
						<thead>
							<tr>
								<th width="0%">Código</th>
								<th width="0%">Nombre</th>
								<th width="0%">Domicilio</th>
							</tr>
							<link href="styles/estilostablas.css" rel="stylesheet" type="text/css">
						</thead>
						<tbody>
					</table>
				</div>
			</div>
		</div>
</body>
<script>
	$('#clientes').hide();
	cliente.listar((data) => {
		for(let i=0; i<data.length; ++i){
			var row = $('<tr></tr>');
			var nombre = $('<td></td>').text(data[i].nombre_cliente);
			var codigo = $('<td></td>').text(data[i].codigo_contrato);
			var domicilio = $('<td></td>').text(data[i].domicilio);
			row.append(codigo);
			row.append(nombre);
			row.append(domicilio);
			$('#clientes').append(row);
		}
		$('#clientes').show();
	});
</script>