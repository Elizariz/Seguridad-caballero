<?php
function obtener_datos_hasura(string $query) : array {
	$headers = "Content-type: application/json\r\n";
	$headers .= 'x-hasura-admin-secret: ' . ADMIN_AUTH . "\r\n";
	$options = array(
		'http' => array(
			'header'	=> $headers,
			'method'	=> 'POST',
			'content'	=> json_encode(array('query' => $query))
		)
	);
	$context = stream_context_create($options);
	$result = file_get_contents(HASURA_ENDPOINT, false, $context);
	if($result){
		$datos = json_decode($result, true);
		return $datos['data'];
	}else
		return array();
}
function empezar_sesion() : bool {
	if(!isset($_COOKIE['sess_id'])){
		if(!isset($_COOKIE['PHPSESSID']))
			return false;
		else
			session_id($_COOKIE['PHPSESSID']);
	}else
		session_id($_COOKIE['sess_id']);
	session_start();
	return isset($_SESSION['id']);
}
function enviar_datos_hasura(string $query) : array {
	$headers = "Content-type: application/json\r\n";
	$headers .= 'x-hasura-admin-secret: ' . ADMIN_AUTH . "\r\n";
	$options = array(
		'http' => array(
			'header'	=> $headers,
			'method'	=> 'POST',
			'content'	=> json_encode(array('query' => $query))
		)
	);
	$context = stream_context_create($options);
	$result = file_get_contents(HASURA_ENDPOINT, false, $context);
	print_r($result);
	if($result)
		return json_decode($result, true)['data'];
	else
		return array();
}