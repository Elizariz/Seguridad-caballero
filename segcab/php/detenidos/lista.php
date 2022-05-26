<?php
require_once('../includes/constants.php');
require_once('../includes/util.inc.php');
header('Content-Type: application/json');
$query =
"query {
	detenidos {
		dedicacion
		edad
		nombre_detenido
		fk_historial1 {
			fecha_detencion
			lugar_detencion
			razon_detencion
		}
	}
}";
$data = obtener_datos_hasura($query)['detenidos'];
echo json_encode($data);