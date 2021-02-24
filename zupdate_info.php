<!DOCTYPE html>
<html lang="en">
<head>

<body style="font-family:sans-serif; ">      
<?php 

$str_sql4="SELECT N.*  FROM t_negocios N  WHERE N.id_place IS NOT NULL and  N.id_place <>'' and N.update='1' " ;

include 'include/db_conect.inc';
$result2 = $conn->query($str_sql4);



    //guardamos en un array multidimensional todos los datos de la consulta
    $i=0;

    while($row = mysqli_fetch_array($result2))
    {
        print $row['id_place'];
        print ("2<Br>");
        $url = "https://maps.googleapis.com/maps/api/place/details/json?place_id=".$row['id_place']."&fields=name,rating,formatted_phone_number,geometry,url,website,user_ratings_total&key=AIzaSyDG-R6WTvqjWqLb-01oG4LV7HV_az9Ajhw" ;
        $json = file_get_contents($url);
        var_dump(json_decode($json));
        print ("<br>");
        //var_dump(json_decode($json, true));
        $array = json_decode($json, true);
        $xx = $array['result'];
        print ($xx['name']);
        $lat  = $xx['geometry']['location']['lat'];
        $lon  = $xx['geometry']['location']['lng'];
        $website='';
        if (array_key_exists('website', $xx)) {
            $website = $xx['website'];
        }
        $valoracion=0;
        if (array_key_exists('rating', $xx)) {
            $valoracion = $xx['rating'];
        }
        $count_review=0;
        if (array_key_exists('user_ratings_total', $xx)) {
          $count_review = $xx['user_ratings_total'];
        }

        //$sql = "UPDATE t_negocios SET valoracion=".$xx['rating'].",lat=".$lat.",lon=".$lon.",url='".$xx['url']."',website='".$website."' WHERE id_place='".$row['id_place']."'";
        $sql = "UPDATE t_negocios SET  valoracion=".$valoracion.",lat=".$lat.",lon=".$lon.",url='".$xx['url']."',webpage='".$website."',user_ratings_total=".$count_review." WHERE id_place='".$row['id_place']."'";
        print ("<br>");
        print ($sql);
        if (1==1) {
        if ($conn->query($sql) === TRUE) {
            echo "Record updated successfully";
          } else {
            echo "Error updating record: " . $conn->error;
          }
        }
          print ("<br><hr><br>");
          
    }
  
  

require "include/db_conect_close.inc";



if (1==2) {

//$url = "https://maps.googleapis.com/maps/api/place/details/json?place_id=ChIJyQnOXJa1vJUR4LR8JHlnZpw&fields=name,rating,formatted_phone_number&key=AIzaSyDG-R6WTvqjWqLb-01oG4LV7HV_az9Ajhw" ;

// $_GET['categoria'];
$json = file_get_contents($url);
var_dump(json_decode($json));
var_dump(json_decode($json, true));
$array = json_decode($json, true);
$xx = $array['result'];
print ($xx['name']);
}
?>
</html>
