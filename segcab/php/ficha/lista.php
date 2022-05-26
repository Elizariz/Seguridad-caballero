<?php
require_once('../includes/constants.php');
require_once('../includes/util.inc.php');
header('Content-Type: application/json');
$query =
"query {
	ficha_delictiva{
		lugar_detencion
		razon_detencion
		nombre_detenido
		fecha_detencion
	}
}";
$data = obtener_datos_hasura($query)['ficha_delictiva'];
echo json_encode($data);