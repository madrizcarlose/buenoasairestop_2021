<?php
$username = "u887045922_vamosba";
$password = "Carlosyana_99";
$database = "u887045922_vamosba";
$server = "185.201.11.107";



$conn = new mysqli($server, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
	echo "malo";
}

?>