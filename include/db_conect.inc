<?php
$username = "u887045922_vamosba";
$password = "Carlosyana_99";
$database = "u887045922_vamosba";
$server = "185.201.11.107";





$username = "u887045922_vamosba";
$password = "Carlosyana_99";
$database = "vamosba";
$server = "3.135.249.14";

$username = "root@localhost";
$password = "anaycarlos";
$database = "vamosba";
$server = "localhost";

$username = "test";
$password = "isO04JyQwsDUm83O";
$database = "vamosba";
$server = "localhost";

$conn = new mysqli($server, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection faileds: " . $conn->connect_error);
	echo "malo";
}

?>