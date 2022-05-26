<?php
require_once('../includes/constants.php');
require_once('../includes/util.inc.php');
header('Content-Type: application/json');
$query =
"query {
	cursos {
		fecha_final
		fecha_inicio
		horario
		instructor
		nombre_curso
	}
}";
$data = obtener_datos_hasura($query)['cursos'];
echo json_encode($data);