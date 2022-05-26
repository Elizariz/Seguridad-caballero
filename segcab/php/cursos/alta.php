<?php
require_once('../includes/constants.php');
require_once('../includes/util.inc.php');
header('Content-Type: application/json');
$query =
'mutation {
	insert_cursos_one (
		object: {
			fecha_inicio: "' . $_POST['fecha_inicio'] . '",
			fecha_final: "' . $_POST['fecha_final'] . '",
			horario: "' . $_POST['horario'] . '",
			instructor: "' . $_POST['instructor'] . '",
			nombre_curso: "' . $_POST['nombre_curso'] . '"
		}
	){
		nombre_curso
	}
}';
$data = enviar_datos_hasura($query)['insert_cursos_one'];
echo json_encode($data);