<?php
require_once('includes/constants.php');

$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
$subject = htmlspecialchars($_POST['subject'], ENT_QUOTES);
$message = htmlspecialchars($_POST['message'], ENT_QUOTES);

$headers = array("From: system@" . DOMAIN . "\r\n",
	"Reply-To: $email\r\n",
	'X-Mailer: PHP/' . phpversion()
);

header("Content-Type: application/json");

$res = mail('contact@' . DOMAIN, $subject, $message, $headers);
echo json_encode(array("success" => $res));