<?php
//$categoria = "c003";
$categoria = $_GET['categoria'];
$lat = $_GET['lat'];
$lat = $_GET['lon'];
//$lat = -34.5737177;
//$lon = -58.4354472;

$str_sql4="SELECT N.*, Round((( 3959 * acos( cos( radians('$lat') ) * cos( radians( N.lat ) ) * cos( radians( N.lon ) - radians('$lon') ) + sin( radians('$lat') ) * sin( radians( N.lat ) ) ) )*1.60934),1)  AS distance FROM t_negocios N JOIN tr_negocios_categorias R ON N.codi_negocio = R.codi_negocio WHERE R.id_categoria ='" .$categoria. "' AND Activo=1 Order By Distance ASC;";

include 'include/db_conect.inc';
$result2 = $conn->query($str_sql4);

$rawdata = array(); //creamos un array

    //guardamos en un array multidimensional todos los datos de la consulta
    $i=0;

    while($row = mysqli_fetch_array($result2))
    {
        $rawdata[$i] = $row;
        $i++;
    }
  
   header('Content-type: application/json');
   echo json_encode($rawdata);
  //var_dump(json_encode($rawdata));


//$json_string = json_encode($rawdata);
//$file = 'clientes.json';
//file_put_contents($file, $json_string);

require "include/db_conect_close.inc";
?>