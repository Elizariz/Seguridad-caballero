<?php
require_once('../includes/constants.php');
require_once('../includes/util.inc.php');
$query =
'query {
	administradores(where: {correo: {_eq: "' . $_POST['correo'] . '"}}) {
		contrasenia
		id_admin
		correo
		nombre
	}
}';
$admins = obtener_datos_hasura($query)['administradores'];
header('Content-Type: application/json');
foreach($admins as $admin){
	if(password_verify($_POST['contrasenia'], $admin['contrasenia'])){
		session_start();
		$sess_id = session_id();
		$_SESSION['id'] = $admin['id_admin'];
		$_SESSION['correo'] = $admin['correo'];
		$_SESSION['nombre'] = $admin['nombre'];
		setcookie('sess_id', $sess_id, strtotime('+1 month'));
		session_commit();
		echo json_encode(array('exito' => true));
		die();
	}
}
echo json_encode(array('exito' => false));