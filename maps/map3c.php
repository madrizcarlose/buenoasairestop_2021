<?php
$username = "u346263277_guia";
$password = "Anaycarlos_99";
$database = "u346263277_guia";
$server = "localhost";

if (1==1)
{

// Opens a connection to a MySQL server

$connection=mysqli_connect ($server , $username, $password,$database);

$query = "SELECT * FROM t_negocios Where Codi_negocio=1";
mysqli_set_charset($connection, "utf8"); //formato de datos utf8

$result = mysqli_query($connection,$query);
$clientes = array(); //creamos un array



while($row = mysqli_fetch_array($result)) 
{ 
	
	$name=$row['nomb_negocio'];
	$lat=$row['lat'];
	$lng=$row['lon'];
	$clientes[] = array('name'=> $name, 'lat'=> $lat, 'lng'=> $lng);
}
	
//desconectamos la base de datos
$close = mysqli_close($connection) 
or die("Ha sucedido un error inexperado en la desconexion de la base de datos");
  

//Creamos el JSON
//$clientes['clientes'] = $clientes;
$json_string = json_encode($clientes);
echo $json_string;

}

?>