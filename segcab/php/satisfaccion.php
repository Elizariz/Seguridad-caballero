<?php
require_once('includes/constants.php');

$email = $_POST['codigo'];
$subject = intval($_POST['calificacion']);
$message = htmlspecialchars($_POST['comentarios'], ENT_QUOTES);

$headers = array("From: system@" . DOMAIN . "\r\n",
	"Reply-To: $email\r\n",
	'X-Mailer: PHP/' . phpversion()
);

header("Content-Type: application/json");

$res = mail('contact@' . DOMAIN, $subject, $message, $headers);
echo json_encode(array("exito" => $res));