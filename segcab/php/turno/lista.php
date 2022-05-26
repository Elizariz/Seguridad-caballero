<?php
require_once('../includes/constants.php');
require_once('../includes/util.inc.php');
header('Content-Type: application/json');
$query =
"query {
	turno {
		horario_turno
		id_turno
		zona
	}
}";
$data = obtener_datos_hasura($query)['turno'];
echo json_encode($data);