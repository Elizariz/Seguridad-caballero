<?php
require_once('../includes/util.inc.php');
header('Content-Type: application/json');
if(empezar_sesion()){
	unset($_COOKIE['sess_id']);
	unset($_COOKIE['PHPSESSID']);
	session_destroy();
	echo json_encode(array('exito' => true));
}else
	echo json_encode(array('exito' => false));