<?php
require_once('../includes/util.inc.php');
header('Content-Type: application/json');
if(empezar_sesion())
	echo json_encode(array("datos" => $_SESSION, "exito" => true));
else
	echo json_encode(array("exito" => false));