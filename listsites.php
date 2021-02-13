<?php 

$categoria = $_GET['categoria'];
$latt = $_GET['lat'];
//print ($latt);


$lont = $_GET['lon'];
//print ($lont);
//$str_sql="SELECT N.nomb_negocio,N.codi_negocio , N.desc_negocio ,N.valoracion ,N.telef_negocio ,N.imagen_negocio ,N.direccion_negocio,N.coord_negocio, N.coord2, N.webpage FROM t_negocios N JOIN tr_negocios_categorias R ON N.codi_negocio = R.codi_negocio WHERE R.id_categoria ='" .$categoria. "' AND Activo=1;";

//$str_sql="SELECT N.* FROM t_negocios N JOIN tr_negocios_categorias R ON N.codi_negocio = R.codi_negocio WHERE R.id_categoria ='" .$categoria. "' AND Activo=1;";
//$str_sql2 = urlencode($str_sql);
//$str_sql3 = urldecode($str_sql2);


//$lat  = $_SESSION["lat"];
//$lon  = $_SESSION["lon"];
$lat = $latt;
$lon = $lont;

if (empty($lat) or (round($lat)!= -34 and round($lat)!= -35)) {
  $lat = -34.6037389;
}
if (empty($lon) or (round($lon)!= -58)) {
  $lon = -58.3815704;
}
	
	
$parametros = "categoria=" . $_GET['categoria'] . "&lat=".$lat . "&lon=".$lon;

//--------------------------------------

//$url = "http://localhost/buenosairestop/get_sites.php?categoria=" . $_GET['categoria'];
//$url = "https://serviciomadriz.online/buenosairestop/get_sites.php?" . $parametros;
$url = "https://topbuenosaires.online/get_sites.php?" . $parametros;

// $_GET['categoria'];
$data = file_get_contents($url);
$products = json_decode($data,true);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="images/app/utils/ico.png">
  <style type="text/css">
    .container.custom-container {
      padding: 0 20px;
    }
  </style>

<style type="text/css">        
    /* Rate Star*/        
    .result-container{
        width: 100px; height: 22px;
        background-color: #ccc;
        vertical-align:middle;
        display:inline-block;
        position: relative;
        top: -4px;
    }
    .rate-stars{
        width: 100px; height: 22px;
        background: url(images/app/stars/stars.png) no-repeat;
        background-size: cover;
        position: absolute;
    }
    .rate-bg{
        height: 22px;
        background-color: #ffbe10;
        position: absolute;
    }
    /* Rate Star Ends*/
    
    /* Display rate count */    
    .reviewCount, .reviewScore {font-size: 14px; color: #666666; margin-left: 5px;}
    .reviewScore {font-weight: 600;}
    /* Display rate count Ends*/        
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
  <script>
     
     




    
</script>
</head>

<body>


<br>
<!-- ENCABEZADO-->
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
	</div> <!--template-->
</div> <!--container-->
<!-- FIN DEL ENCABEZADO -->
<br>
<div class="custom-container container">
	<div class="template">
		<div class="row" align="right">
    <div class="col-sm-12 col-md-12 col-lg-12" align="right">
<form id="formulario" name="formulario" target="POPUPW" action="maps/map2a.php" method="post" 
				onsubmit="POPUPW = window.open('about:blank','POPUPW',
   'width=1200,height=800');">
   <input type="hidden" name="categoria" value="<?php print($categoria); ?>" />
   <input type="text" name="lat" value="<?php print($lat); ?>" />
   <input type="text" name="lon" value="<?php print($lon); ?>" />
   <input type="text" name="latround" value="<?php print( round($lat)); ?>" />
   <input type="text" name="parametros" value="<?php print($parametros); ?>" />


  
   
   
					<input type="submit" value="Ver mapa" />
          </form>
          </div>
          </div> <!--row-->
	</div> <!--template-->
</div> <!--container-->
<br>

<div class="custom-container container" >
<div class="template">
<div class="container-fluid" style="background-color:#fafafa;">
	<br><br>
<div class="row gutter-30" >
				
				<br>	
<?php

$max = "5"; // Numero total de imagenes
$extension2 = ".png";// Definimos la extension, puede ser .jpg, gif, bmp, etc.
$carpeta2 = "../imagenes/apps/estrellas";//Carpeta con las imagenes
$start = "2";

//$row = $products;
//var_dump($products);
$longitud = count($products);

//while($row = $products->fetch_assoc()) {
  //foreach ($products as $row) {
for($i=0; $i<$longitud; $i++) {
  
  $row = $products[$i];
     // var_dump($row);
  //$random = mt_rand($start, $max);
  //$image_name2 = $carpeta2  . $random . $extension2;
  //$image_name2= "img src='" . $image_name2 . "'  width=52,height=28 id='imagen' class='imagen'/> ";
  //$image_name3= "img src='" . $image_name2 . "'  width=25,height=25 id='imagen' class='imagen'/> ";
	$foto = "images/sites/" . $row['imagen_negocio'] ;
?>
<div class="col-xs-6 col-sm-4 col-md-4 col-lg-3"  >	
<div class="shadow p-0 mb-5 bg-white rounded">
    <img class="card-img-top" src="<?php echo $foto;?>" alt="Card image cap" height='240'>
    <div class="card-body">
        <h5 class="card-title" >
        <div id="site2<?php echo $row['codi_negocio']; ?>">
            <h4><font color="#086A87"><?php print $row['nomb_negocio']; ?></h4></font>        
        </div>
        <?php
    //defining Product id
  if ($row['valoracion']>0){

      $rate_bg = round(($row['valoracion']/5),2)*100;
      ?>
      <div style="margin-top: 10px">
      <div class="result-container">
      <div class="rate-bg" style="width:<?php echo $rate_bg; ?>%"></div>
      <div class="rate-stars"></div>
  </div>                    
  <span class="reviewScore"><?php echo substr($row['valoracion'],0,3); ?></span>
    
   <?php } ?>
                       
    
    </h5>
       <p>
		    <span class="glyphicon glyphicon-earphone"></span>
		    <span style="color:black; text-algin:center;display-block:inline;">
            <?php print $row['telef_negocio'];?>        
            <?php 
            if ($row['whatsapp'] != NULL) {
              ?>
              <a href="https://api.whatsapp.com/send?phone=<?php print $row['whatsapp'];?>&text=Hola, los ubiqué en *https://serviciomadriz.online/buenosairestop*." target="blank" >
              <img src="images/app/utils/whatsapp_ico.png"  height="22" width="22"><br>
				      </a>
            <?php  } ?>     
          </span>
        <p>
        <span class="glyphicon glyphicon-map-marker"></span>
        <?php print $row['direccion_negocio'];?>
    </div> <!-- class="card-body" -->

    <ul class="list-group list-group-flush">
        <li class="list-group-item"  style="background-color:#fafafa;">
           <div style="width: 50%; float:left">
              <a href="<?php print $row['webpage']; ?>" target="blank" >Web page</a>
          </div>
          <div style="width: 50%; float:right;" align="right">
            <?php 
              $coord = $row['coord2'];
              $tira= "<a href=https://www.google.co.ve/maps/place/" .$coord . " onclick=" . "\"window.open(this.href, 'mywin', 'left=200,top=20,width=900,height=500,toolbar=1,resizable=0'); return false;" . "\" align='right'>Ver mapa</a>";
              echo ("<br>");
              echo $tira;
              $tira2= "<a href=".$row['url'] . " onclick=" . "\"window.open(this.href, 'mywin', 'left=200,top=20,width=900,height=500,toolbar=1,resizable=0'); return false;" . "\" align='right'>Ver url</a>";
              echo $tira2;
     
            ?>
            <font face="helvetica"><small><?php print $row['distance']; ?>&nbsp;km</font></small>
          </div>
       </li>
    </ul>
</div>
</div>	

<?php
}  //fin de bucle
?>
			
</div> <!-- row gutter-30 -->
</div> <!-- container-fluid -->
</div> <!-- template -->
</div> <!-- custom-container container -->

<br><br><br><br>
<!--pie de pagina-->
<?php 
//require "include/db_conect_close.inc";
include 'include/footer.inc';
?> 

</body>

</html>
