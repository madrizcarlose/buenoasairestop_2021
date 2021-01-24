<?php 

$categoria = $_GET['categoria'];
//$str_sql="SELECT N.nomb_negocio,N.codi_negocio , N.desc_negocio ,N.valoracion ,N.telef_negocio ,N.imagen_negocio ,N.direccion_negocio,N.coord_negocio, N.coord2, N.webpage FROM t_negocios N JOIN tr_negocios_categorias R ON N.codi_negocio = R.codi_negocio WHERE R.id_categoria ='" .$categoria. "' AND Activo=1;";

//$str_sql="SELECT N.* FROM t_negocios N JOIN tr_negocios_categorias R ON N.codi_negocio = R.codi_negocio WHERE R.id_categoria ='" .$categoria. "' AND Activo=1;";
//$str_sql2 = urlencode($str_sql);
//$str_sql3 = urldecode($str_sql2);


//$lat  = $_SESSION["lat"];
//$lon  = $_SESSION["lon"];
$lat = -34.5737177;
$lon = -58.4354472;

//$str_sql4="SELECT N.*, Round((( 3959 * acos( cos( radians('$lat') ) * cos( radians( N.lat ) ) * cos( radians( N.lon ) - radians('$lon') ) + sin( radians('$lat') ) * sin( radians( N.lat ) ) ) )*1.60934),1)  AS distance FROM t_negocios N JOIN tr_negocios_categorias R ON N.codi_negocio = R.codi_negocio WHERE R.id_categoria ='" .$categoria. "' AND Activo=1 Order By Distance ASC;";


?>

<?php 
//include 'include/db_conect.inc';
require "get_sites.php";
?>

<?php
//$result = $conn->query($str_sql4);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style type="text/css">
    .container.custom-container {
      padding: 0 10px;
    }
</style>
   <?php include 'include/head.inc';?>
   <!--
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
-->
   <title>Buenos Aires - Mejores sitios</title>

<script>
function selectText(containerid) {
    if (document.selection) { // IE
        var range = document.body.createTextRange();
        range.moveToElementText(document.getElementById(containerid));
        range.select();
    } else if (window.getSelection) {
        var range = document.createRange();
        range.selectNode(document.getElementById(containerid));
        window.getSelection().removeAllRanges();
        window.getSelection().addRange(range);
    }
}
</script>
</head>

<body>
<br>


<br>
<!-- encabezado-->
<div class="custom-container container">
	<div class="template">
		<div class="row">
			<div class="col-sm-4 col-md-4 col-lg-4" align="left"> 
			<a href="index.php"><img src="images/app/utils/logo2.jpg"  alt="" longdesc="" id="img_logo"  height="62" width="130">
			</a>
			</div>
			<div class="col-sm-8 col-md-8 col-lg-8" valign="center" align="center"> 
				<!--<p class="h1"  align="left">Guía de Buenos Aires</p>--> 
				<h1 align="left">Guia - Mejores sitios</h1>
			</div>
		</div> <!--row-->
	</div>
</div> <!--container-->


<br>
<div class="custom-container container" >
<div class="template">
	<div class="container-fluid" style="background-color:#fafafa;">
		<br><br>
		<div class="row gutter-10" >
			<!--
			<div class="container-fluid" border=1 >
-->
				<form target="POPUPW" action="maps/map2a.php" method="post" 
				onsubmit="POPUPW = window.open('about:blank','POPUPW',
   'width=600,height=400');">
				
				<!--	<input id="xlat" type="input" name="lat"/>
					<input id="xlon" type="input" name="lon"/>
					<input type="submit" value="Ver mapa" />
-->
				</form>
				<br>	
				
<script>
var xlat = document.getElementById("xlat");
 if (navigator.geolocation) {
	 // alert("xxx22");
    navigator.geolocation.getCurrentPosition(showPosition);
	 //alert("xxx999");
} else { 
 //alert("xxx3334");
    xlat.innerHTML = "Geolocation is not supported by this browser.";
  }


function showPosition(position) {
    x.innerHTML = "Latitude: " + position.coords.latitude + 
  "<br>Longitude: " + position.coords.longitude; 
  document.getElementById('xlat').value = position.coords.latitude;
}
</script>
		

<?php
//while($row = $result->fetch_assoc()) {

	while($row = $result2->fetch_assoc()) {
							
$max = "5"; // Numero total de imagenes
$extension2 = ".png";// Definimos la extension, puede ser .jpg, gif, bmp, etc.
$carpeta2 = "../imagenes/apps/estrellas";//Carpeta con las imagenes
$start = "2";
$random = mt_rand($start, $max);
$image_name2 = $carpeta2  . $random . $extension2;
$image_name2= "img src='" . $image_name2 . "'  width=52,height=28 id='imagen' class='imagen'/> ";
$image_name3= "img src='" . $image_name2 . "'  width=25,height=25 id='imagen' class='imagen'/> ";
?>
<div class="col-xs-12 col-sm-4 col-md-4 col-lg-3"  >	
<div class="card" style="width: 18rem;" halign="center">
            <?php
				$foto = "img src='images/sites/" . $row['imagen_negocio'] . "' width=178,height=118  class='img-rounded' onclick='javascript:alert(" . $row['codi_negocio'] . ");'  class='img-responsive'/> ";
				print "<" . $foto;
				?>
  
  <div class="card-body">
    <div class="panel-body ">
       	<table border=0 width="100%">
			<tr>
			
		
			<td class="align-top" >
				<div id="site<?php echo $row['codi_negocio']; ?>" onclick="selectText('site<?php echo $row['codi_negocio'];?>')">
					<h4><font color="#086A87"><?php print $row['nomb_negocio']; ?></h4></font>
				</div>
				<font face="helvetica" color="black">
				<?php $rank = $row['valoracion']; ?>									
				<?php print Substr($row['desc_negocio'], 0,50) . "..."; ?>
				</font><p><a href="<?php print $row['webpage']; ?>" target="blank" >Web page</a><p>
				<span class="glyphicon glyphicon-earphone"></span>
				<span id="tlf<?php echo $row['codi_negocio']; ?>" style="color:black; text-algin:center;display-block:inline;" onclick="selectText('tlf<?php echo $row['codi_negocio'];?>')">
					<?php print $row['telef_negocio'];?>
				</span>
				<br>
                </font>
                <font face="helvetica"><small><?php print $row['distance']; ?>&nbsp;km</font>
				<p><font face="helvetica"><small>
				<?php
				$coord = $row['coord2'];
				$tira= "<a href=https://www.google.co.ve/maps/place/" .$coord . " onclick=" . "\"window.open(this.href, 'mywin', 'left=20,top=20,width=900,height=500,toolbar=1,resizable=0'); return false;" . "\" >Ver mapa</a>";
				echo $tira;
				?>
				</small></font>
				<div>
					<font face="helvetica"><small><b>Dir:&nbsp;</u></b>	<?php print $row['direccion_negocio']; ?></font></small>
				</div>
			</td>
			</tr>
		</table>
    </div> <!--panel body-->
  </div> <!--card body-->
</div>	
</div>	



<?php
//fin de bucle
}
//se cierra la conexioón
//$conn->close();
?>
					
</div>
</div>
</div>
</div>

<br><br><br><br>
<!--pie de pagina-->
<?php 
require "include/db_conect_close.inc";
include 'include/footer.inc';
?> 

</body>
</html>
