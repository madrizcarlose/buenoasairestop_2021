<?php
session_start();
session_regenerate_id(true);

include 'include/db_credenciales.inc';

// change the information according to your database
//$db_connection = mysqli_connect("185.201.11.107","u887045922_vamosba","Carlosyana_99","u887045922_vamosba");
$db_connection = mysqli_connect($server, $username, $password, $database);

// CHECK DATABASE CONNECTION
if(mysqli_connect_errno()){
    echo "Connection Failed".mysqli_connect_error();
    exit;
}
