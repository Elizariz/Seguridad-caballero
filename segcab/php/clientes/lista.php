<?php
require_once('../includes/constants.php');
require_once('../includes/util.inc.php');
header('Content-Type: application/json');
$query =
"query {
	Calificacion_cliente {
		codigo_contrato
		domicilio
		nombre_cliente
	}
}";
$data = obtener_datos_hasura($query)['Calificacion_cliente'];
echo json_encode($data);