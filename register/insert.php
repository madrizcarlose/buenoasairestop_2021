<?php 
$name = $_POST['name'];
$whatsapp = $_POST['whatsapp'];
$descripcion = $_POST['descripcion'];
$idplace = $_POST['idplace'];
$categoria = $_POST['categoria'];
//$namefile = $_POST['namefile'];
print $name;
print "<br><hr><br>";
print $descripcion;
print "<br><hr><br>";
print $idplace;
print "<br><hr><br>";
print $categoria;
print "<br><hr><br>gg";

if(isset($_FILES["photo"]) && $_FILES["photo"]["error"] == 0){
    $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
    $filename = $_FILES["photo"]["name"];
    $filetype = $_FILES["photo"]["type"];
    $filesize = $_FILES["photo"]["size"];
print $filename;
}
print "<br>sss<hr><br>gg";

$target_dir = "uploads/";
$target_file = $target_dir . $_FILES["fileToUpload"]["name"];
$uploadOk = 1;
move_uploaded_file($_FILES["photo"]["tmp_name"], "../images/sites/" . $filename);
echo "Your file was uploaded successfully.";
if (1==2){
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}
}

if (1==1){

$url = "https://maps.googleapis.com/maps/api/place/details/json?place_id=".$idplace."&fields=name,formatted_address,rating,formatted_phone_number,international_phone_number,geometry,url,website,user_ratings_total&key=AIzaSyDG-R6WTvqjWqLb-01oG4LV7HV_az9Ajhw" ;
//$url = "https://maps.googleapis.com/maps/api/place/details/json?place_id=".$idplace."&key=AIzaSyDG-R6WTvqjWqLb-01oG4LV7HV_az9Ajhw" ;
$json = file_get_contents($url);
var_dump(json_decode($json));
print ("<br>");
//var_dump(json_decode($json, true));
$array = json_decode($json, true);
$xx = $array['result'];
print ($xx['name']);
$name2  = $xx['name'];
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
$international_phone_number='';
if (array_key_exists('international_phone_number', $xx)) {
    $international_phone_number = $xx['international_phone_number'];
}
$formatted_address='';
if (array_key_exists('formatted_address', $xx)) {
    $formatted_address = $xx['formatted_address'];
}
$urlsite='';
if (array_key_exists('url', $xx)) {
    $urlsite = $xx['url'];
}


?>
<!DOCTYPE html>
<html lang="en">
<head>

<body style="font-family:sans-serif; ">      
<?php 


include '../include/db_conect.inc';



    //guardamos en un array multidimensional todos los datos de la consulta
    //$sql = "UPDATE t_negocios SET  valoracion=".$valoracion.",lat=".$lat.",lon=".$lon.",url='".$xx['url']."',webpage='".$website."',user_ratings_total=".$count_review." WHERE id_place='".$row['id_place']."'";
    $sql = "INSERT INTO t_negocios (nomb_negocio, desc_negocio, valoracion, telef_negocio, whatsapp, direccion_negocio, activo, lat, lon,id_place,url,webpage, user_ratings_total, imagen_negocio)
    VALUES ('". $name2."','".$descripcion."',".$valoracion.",'".$international_phone_number."','".$whatsapp."','".$formatted_address."',1,".$lat.",".$lon.",'".$idplace."','".$urlsite."','".$website."',".$count_review.",'".$filename."')";
    print ("<br>");
    print ($sql);
        if (1==1) {
        if ($conn->query($sql) === TRUE) {
            echo "Record updated successfully in NEGOCIOS";
          } else {
            echo "Error updating record: " . $conn->error;
          }
        } //if
          print ("<br><hr><br>");
          
$sql="SELECT * from t_negocios order by codi_negocio desc LIMIT 0,1";
$result2 = $conn->query($sql);
while ($row = mysqli_fetch_array($result2)) {  
print $row['codi_negocio'];
$last_codi_negocio = $row['codi_negocio'];
}

$sql = "INSERT INTO tr_negocios_categorias (codi_negocio, id_categoria)
    VALUES ('". $last_codi_negocio ."','".$categoria."')";
    print ("<br>");
    print ($sql);
        if (1==1) {
        if ($conn->query($sql) === TRUE) {
            echo "Record updated successfully";
          } else {
            echo "Error updating record: " . $conn->error;
          }
        } //if
require "../include/db_conect_close.inc";


    }

?>
</html>
