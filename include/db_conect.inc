<?php

include 'db_credenciales.inc';

$conn = new mysqli($server, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection faileds: " . $conn->connect_error);
	echo "malo";
}

?>