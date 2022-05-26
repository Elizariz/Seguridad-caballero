<?php
require_once('../includes/constants.php');
require_once('../includes/util.inc.php');
header('Content-Type: application/json');
$id = hexdec(hash('joaat', date('Y-m-d h:s'))) % 1000000;
$query =
'mutation {
	insert_Calificacion_cliente_one (
		object: {
			codigo_contrato: "' . $id . '",
			domicilio: "' . $_POST['domicilio'] . '",
			nombre_cliente: "' . $_POST['nombre_cliente'] . '"
		}
	){
		codigo_contrato
	}
}';
$data = enviar_datos_hasura($query)['insert_Calificacion_cliente_one'];
echo json_encode($data);