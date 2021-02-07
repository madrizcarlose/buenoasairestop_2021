<?php


//print ('mmm');
$username = "u887045922_vamosba";
$password = "Carlosyana_99";
$database = "u887045922_vamosba";
$server = "185.201.11.107";
//$lat = -34.5737177;
//$lon = -58.4354472;
//session_start();
//$var_sql3 = $_SESSION["s_sql"];
//$categoriaID = $_SESSION["categoria"];
$categoria = $_GET['categoria'];
$lat = $_GET['lat'];
$lon = $_GET['lon'];
//$categoria = 'c003';
 $var_sql3 = "SELECT N.*, Round((( 3959 * acos( cos( radians('$lat') ) * cos( radians( N.lat ) ) * cos( radians( N.lon ) - radians('$lon') ) + sin( radians('$lat') ) * sin( radians( N.lat ) ) ) )*1.60934),1)  AS distance FROM t_negocios N JOIN tr_negocios_categorias R ON N.codi_negocio = R.codi_negocio WHERE R.id_categoria ='" .$categoria. "' AND Activo=1 Order By Distance ASC;";

 
$var_sql2 = urldecode($var_sql3);

//print($var_sql2 );
//$var_sql = "xxxx";


// Start XML file, create parent node
?>
<?php
//print ($yy);
?>
<?php
//print ($var_sql2);
?>
<?php
if (1==1) {
$dom = new DOMDocument("1.0");
$node = $dom->createElement("markers");
$parnode = $dom->appendChild($node);

// Opens a connection to a MySQL server

$connection=mysqli_connect ($server, $username, $password,$database);
if (!$connection) { 
 die('Not connected : ' . mysqli_error());
 }

// Set the active MySQL database

// $db_selected = mysqli_select_db($connection);
// if (!$db_selected) {
//   die ('Can\'t use db : ' . mysql_error());
// }

// Select all the rows in the markers table

//$query = "SELECT * FROM t_negocios Where lat<>0";
$query = $var_sql3;
$result = mysqli_query($connection,$query);
if (!$result) {
 //print ("$var_sql");
 // print ($var_sql);
  die('Invalid query: ' . mysqli_error());
}

header("Content-type: text/xml");

// Iterate through the rows, adding XML nodes for each

while ($row = mysqli_fetch_assoc($result)){
  // Add to XML document node
  $node = $dom->createElement("marker");
  $newnode = $parnode->appendChild($node);
  $newnode->setAttribute("id",$row['codi_negocio']);
  $newnode->setAttribute("name",$row['nomb_negocio']);
  $newnode->setAttribute("address", $row['direccion_negocio']);
  $newnode->setAttribute("lat", $row['lat']);
  $newnode->setAttribute("lng", $row['lon']);
  $newnode->setAttribute("type", $row['type']);
 // $newnode->setAttribute("distance", $row['Distance']);
}

echo $dom->saveXML();
}
?>