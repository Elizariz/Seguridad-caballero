<?php
require_once('../includes/constants.php');
require_once('../includes/util.inc.php');
header('Content-Type: application/json');
$id = hexdec(hash('joaat', date('Y-m-d h:s'))) % 1000000;
$id_empleado = hexdec(hash('joaat', date('Y-m-d h:m:s'))) % 1000000;
$query =
'mutation{
	insert_empleado_one(
		object: {
			administrador: "0",
			nombre_empleado: "' . $_POST['nombre_empleado'] . '",
			codigo_empleado: "' . $id_empleado . '",
			correo: "' . $_POST['correo'] . '",
			curp: "' . $_POST['curp'] . '",
			fk_cardex1: {
				data: {
					curp: "' . $_POST['curp'] . '",
					fecha_contratacion: "' . $_POST['fecha_contratacion'] . '",
					fecha_nacimiento: "' . $_POST['fecha_nacimiento'] . '",
					fk_empleado: "' . $id_empleado . '",
					fk_turno: "3005",
					nombre_empleado: "' . $_POST['nombre_empleado'] . '",
					rfc: "' . $_POST['rfc'] . '"
				}
			},
			fk_cardex: "' . $id . '"
		}
	){
		curp
	}
}';
$data = enviar_datos_hasura($query)['insert_empleado_one'];
echo json_encode($data);