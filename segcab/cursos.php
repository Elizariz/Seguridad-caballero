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
	<title>Cursos</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="styles/styles.css">
	<link href="styles/estilostablas.css" rel="stylesheet" type="text/css">
	<script src="js/main.js"></script>
	<script src="js/curso.js"></script>
</head>
<body>
	<?php
		echo file_get_contents('./header_user.html');
	?>
	<div class="container">
		<hr>
		<header class="showcase">
			<h2>Cursos</h2>
			<p>
				En esta sección podrás consultar tus cursos:
			</p>
			<h2>Cursos en progreso:</h2>
		</header>
	</div>
	<hr>
	<div class="panel panel-inverse" data-sortable-id="index-1">
			<div class="panel-body">
				<div class="table-responsive">
					<table id="progreso" class="table table-bordered mb-0 align-middle">
						<thead>
							<tr>
								<th width="0%">Nombre</th>
								<th width="0%">Instructor</th>
								<th width="0%">Horario</th>
								<th width="0%">Inicio</th>
								<th width="0%">Fin</th>

							</tr>
							<link href="styles/estilostablas.css" rel="stylesheet" type="text/css">
						</thead>
						<tbody>


					</table>
					<div id="interactive-chart" class="h-10px">


					</div>
				</div>
			</div>
		</div>
		<!--1  -->
		<br><br><br><br>
		<div class="container">
		<h2>Cursos finalizados:</h2>
		<hr>
		</div>
		<div class="panel panel-inverse" data-sortable-id="index-1">
			<div class="panel-heading">
			<!--	<h4 class="panel-title" style="text-align:center" style="color:red">tabla de Detenidos</h4>  -->
			   
			</div>
			<div class="panel-body">
				<div class="table-responsive">
					<table id="historico" class="table table-bordered mb-0 align-middle">
						<thead>
							<tr>
							<th width="0%">Nombre</th>
								<th width="0%">Instructor</th>
								<th width="0%">Horario</th>
								<th width="0%">Inicio</th>
								<th width="0%">Fin</th>
							</tr>
						</thead>
						<tbody>
					</table>
					<div id="interactive-chart" class="h-10px">


					</div>
				</div>
			</div>
		</div>
		<!--2  -->

</body>
<script>
	$('#progreso').hide();
	$('#historico').hide();
	curso.listar((data) => {
		for(let i=0; i<data.length; ++i){
			var row = $('<tr></tr>');
			var nombre = $('<td></td>').text(data[i].nombre_curso);
			var instructor = $('<td></td>').text(data[i].instructor);
			var horario = $('<td></td>').text(data[i].horario);
			var inicio = $('<td></td>').text(data[i].fecha_inicio);
			var final = $('<td></td>').text(data[i].fecha_final);
			row.append(nombre);
			row.append(instructor);
			row.append(horario);
			row.append(inicio);
			row.append(final);
			if(Date.parse(data[i].fecha_final) > Date.now())
				$('#progreso').append(row);
			else
				$('#historico').append(row);
			$('#progreso').show();
			$('#historico').show();
		}
	});
</script>