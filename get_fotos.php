<?php

$id_neg = $_GET['id_neg'];


$str_sql4="SELECT * FROM t_negocios_fotos WHERE codi_negocio =".$id_neg.";";


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