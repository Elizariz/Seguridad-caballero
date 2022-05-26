<?php
require_once('../includes/constants.php');
require_once('../includes/util.inc.php');
header('Content-Type: application/json');
$query =
"query{
	empleado{
		fk_cardex1{
			fecha_nacimiento
			rfc
		}
		nombre_empleado
		correo
	}
}";
$data = obtener_datos_hasura($query)['empleado'];
echo json_encode($data);