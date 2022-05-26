<?php
require_once('../includes/constants.php');
require_once('../includes/util.inc.php');
header('Content-Type: application/json');
$id = hexdec(hash('joaat', date('Y-m-d h:s'))) % 1000000;
$id_detenido = hexdec(hash('joaat', date('Y-m-d h:s'))) % 1000000;
$query =
'mutation{
	insert_ficha_delictiva_one(
		object: {
			id_ficha: "' . $id . '",
			fecha_detencion: "' . $_POST['fecha_detencion'] . '",
			lugar_detencion: "' . $_POST['lugar_detencion'] . '",
			nombre_detenido: "' . $_POST['nombre_detenido'] . '",
			razon_detencion: "' . $_POST['razon_detencion'] . '"
			fk_codigo_empleado: "90001",
			fk_detenido1: {
				data: {
					dedicacion: "' . $_POST['dedicacion_detenido'] . '",
					edad: "' . $_POST['edad_detenido'] . '",
					nombre_detenido: "' . $_POST['nombre_detenido'] . '",
					id_detenido: "' . $id_detenido . '",
					fk_historial: "' . $id . '"
				}
			},
		}
	){
		id_ficha
	}
}';
$data = enviar_datos_hasura($query)['insert_ficha_delictiva_one'];
echo json_encode($data);