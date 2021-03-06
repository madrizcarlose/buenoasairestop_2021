<!DOCTYPE html>
<html lang="en">
<head>


</head>

<?php


$str_sql4="SELECT codi_negocio, id_place FROM t_negocios  WHERE id_place IS NOT NULL and id_place <> '' and id_place <> 'ChIJAThMnZi1vJURiYnClw7laKY' and codi_negocio >=113 and codi_negocio <=220;";

    include '../include/db_conect.inc';
   
    $result2 = $conn->query($str_sql4);
    //print $$result2;
    $rawdata = array(); //creamos un array
    
        //guardamos en un array multidimensional todos los datos de la consulta
        $i=0;
    
        while($row = mysqli_fetch_array($result2))
        {
           // print $row;
            $rawdata[$i] = $row;
           // print $rawdata;
            $id = $row["id_place"];
            $codi_negocio = $row["codi_negocio"];
            $url = "https://maps.googleapis.com/maps/api/place/details/json?place_id=".$id."&key=AIzaSyDG-R6WTvqjWqLb-01oG4LV7HV_az9Ajhw" ;
            $i++;
            print $url;
            print ("<hr>");

            
       
      

        if (1 == 1) {

//$url = "https://maps.googleapis.com/maps/api/place/details/json?place_id=ChIJyQnOXJa1vJUR4LR8JHlnZpw&key=AIzaSyDG-R6WTvqjWqLb-01oG4LV7HV_az9Ajhw" ;
$json = file_get_contents($url);
//var_dump(json_decode($json));
print ("<br>");
//var_dump(json_decode($json, true));
$array = json_decode($json, true);
$xx = $array['result'];
print ($xx['name']);

$foto  = $xx['photos'][1]['photo_reference'];

$array =  $xx['photos'];
$array = array_slice( $xx['photos'], 0, 5);  
foreach ($array as &$valor) {
    print ("<br>");
   print $valor['photo_reference'];
   print ("<br>");
   $url_foto = "https://maps.googleapis.com/maps/api/place/photo?maxwidth=400&photoreference=" . $valor['photo_reference'] ."&key=AIzaSyDG-R6WTvqjWqLb-01oG4LV7HV_az9Ajhw" ;
   $furl = false;
   // First check response headers
   $headers = get_headers($url_foto);
   // Test for 301 or 302
   if(preg_match('/^HTTP\/\d\.\d\s+(301|302)/',$headers[0]))
       {
       foreach($headers as $value)
           {
           if(substr(strtolower($value), 0, 9) == "location:")
               {
               $furl = trim(substr($value, 9, strlen($value)));
               }
           }
       }
   // Set final URL
   $furl = ($furl) ? $furl : $url;
   print ("<br>");
  // print $furl;
   print ("<br>");
   print ("<hr>");
   $sql = "INSERT INTO t_negocios_fotos (codi_negocio, url_foto)
            VALUES ('". $codi_negocio."','".$furl."')";
            print ("<br>");
            print ($sql);
            print ("<hr>");
            if (1==1) {
                if ($conn->query($sql) === TRUE) {
                    echo "Record updated successfully in NEGOCIOS";
                  } else {
                    echo "Error updating record: " . $conn->error;
                  }
                } //if
                  print ("<br><hr><br>");
}

//print $foto;
}
}
require "../include/db_conect_close.inc";
