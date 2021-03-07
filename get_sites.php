<?php
//$categoria = "c003";

$lat = $_GET['lat'];
$lon = $_GET['lon'];

$latf = (float)$lat;
$lonf = (float)$lon;
//$lat = -34.5737177;
//$lon = -58.4354472;

if( isset($_GET['categoria']) )
{
    
    $categoria = $_GET['categoria'];
    $str_sql4="SELECT N.*, Round((( 3959 * acos( cos( radians('$latf') ) * cos( radians( N.lat ) ) * cos( radians( N.lon ) - radians('$lonf') ) + sin( radians('$latf') ) * sin( radians( N.lat ) ) ) )*1.60934),1)  AS distance FROM t_negocios N JOIN tr_negocios_categorias R ON N.codi_negocio = R.codi_negocio WHERE R.id_categoria ='" .$categoria. "' AND Activo=1 Order By Distance ASC;";

} 
    else  {
       
     if ( isset($_GET['zona']) )
     {
        $zona = $_GET['zona'];
        $str_sql4="SELECT N.*, Round((( 3959 * acos( cos( radians('$latf') ) * cos( radians( N.lat ) ) * cos( radians( N.lon ) - radians('$lonf') ) + sin( radians('$latf') ) * sin( radians( N.lat ) ) ) )*1.60934),1)  AS distance FROM t_negocios N JOIN tr_negocios_categorias R ON N.codi_negocio = R.codi_negocio WHERE zona ='" .$zona. "' AND Activo=1 AND R.id_categoria IN ('C003', 'C020', 'C006', 'C008') GROUP BY N.codi_negocio Order By Distance ASC;";

    }
}
//print $str_sql4;

include 'include/db_conect.inc';
//print $server;
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