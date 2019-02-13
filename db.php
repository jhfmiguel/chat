<?php

$host = "localhost";
$user = "root";
$password = "12345";
$db = "chat";

$connection = new mysqli($host, $user, $password, $db);

function formatDate($date) {
	return date('H:i:s', strtotime($date));
}

?>