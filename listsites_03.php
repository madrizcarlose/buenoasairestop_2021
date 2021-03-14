<?php 

//$categoria = $_GET['categoria'];

$latt = $_GET['lat'];
//print ($latt);


if( isset($_GET['categoria']) )
{
    
    $categoria = $_GET['categoria'];
  
} 
    else  {
       
     if ( isset($_GET['zona']) )
     {
        $zona = $_GET['zona'];
     
    }
}






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
	
	
//$parametros = "categoria=" . $_GET['categoria'] . "&lat=".$lat . "&lon=".$lon;


if( isset($_GET['categoria']) )
{
  $parametros = "categoria=" . $_GET['categoria'] . "&lat=".$lat . "&lon=".$lon;
} 
    else  {
     if ( isset($_GET['zona']) )
     {
      $parametros = "zona=" . $_GET['zona'] . "&lat=".$lat . "&lon=".$lon;
    }
}

$parametros = str_replace(' ', '%20', $parametros);
//print $parametros;
//--------------------------------------

//$url = "http://localhost/buenosairestop/get_sites.php?categoria=" . $_GET['categoria'];
//$url = "https://serviciomadriz.online/buenosairestop/get_sites.php?" . $parametros;

//$url = "https://topbuenosaires.online/get_sites.php?" . $parametros;
$url = "http://ec2-3-138-102-101.us-east-2.compute.amazonaws.com/get_sites.php?" . $parametros;


//print $url;
// $_GET['categoria'];
$data = file_get_contents($url);
$products = json_decode($data,true);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/style.css">
  
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
    .div2 {
  background-color: lightblue;
}
.example {
  background-image: linear-gradient(#4C68F4 , blue);
}
    
    /* Display rate count */    
    .reviewCount, .reviewScore {font-size: 12px; color: #666666; margin-left: 5px;}
    .reviewScore {font-weight: 600;}
    /* Display rate count Ends*/        
    </style>
   
  

 


   <title>Buenos Aires - Mejores sitios</title>

  
</head>

<body class="example">



      


<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar">
				<div class="p-4 pt-5">
		  		<a href="#" class="img logo rounded-circle mb-5" style="background-image: url(images/logo.jpg);"></a>
	        <ul class="list-unstyled components mb-5">
	          <li class="active">
	            <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Restaurantes  &nbsp;<font size=2><span class="badge rounded-pill bg-light text-dark">22</span></font></a>
	            <ul class="collapse list-unstyled" id="homeSubmenu">
              <li>
                    <a href="#" onclick="showList('c001');">Desayunos &nbsp;<span class="badge rounded-pill bg-primary">3</span></a>
                </li>
                <li>
                    <a href="#" onclick="showList('c003');">Asados &nbsp;<span class="badge rounded-pill bg-primary">12</span></a>
                </li>
                <li>
                    <a href="#" onclick="showList('c006');">Pescado y Mariscos &nbsp;<span class="badge rounded-pill bg-primary">3</span></a>
                </li>
                <li>
                <a href="#" onclick="showList('c008');">Italiana &nbsp;<span class="badge rounded-pill bg-primary">4</span></a>
                </li>
                <li>
                <a href="#" onclick="showList('c008');">Oriental &nbsp;<span class="badge rounded-pill bg-primary">1</span></a>
              </li>
              <li>
                <a href="#" onclick="showList('c007');">SurAmericana &nbsp;<span class="badge rounded-pill bg-primary">2</span></a>
              </li>
              <li>
                <a href="#" onclick="showList('c011');">Hamburguesas &nbsp;<span class="badge rounded-pill bg-primary">2</span></a>
              </li>
	            </ul>
	          </li>
	          <li>
              <a href="#" onclick="showList('c020');">Bares &nbsp;<font size=2><span class="badge rounded-pill bg-light text-dark">9</span></font></a>
	          </li>
            <li>
              <a href="#" onclick="showList('r000');">Actividades  &nbsp;<font size=2><span class="badge rounded-pill bg-light text-dark">8</span></font></a>
	          </li>
            <li>
              <a href="#" onclick="showList('c010');">Sitios Turísticos  &nbsp;<font size=2><span class="badge rounded-pill bg-light text-dark">7</span></font></a>
	          </li>
	          <li>
              <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Servicios  &nbsp;<font size=2><span class="badge rounded-pill bg-light text-dark">2</span></font></a>
              <ul class="collapse list-unstyled" id="pageSubmenu">
                
                <li>
                    <a  href="#" onclick="showList('c011');">Inmobliarias</a>
                </li>
                <li>
                    <a  href="#" onclick="showList('s002');">Seguros</a>
                </li>
              
              </ul>
              <li class="active">
	            <a href="#homeSubmenu2" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Buscar por zona</a>
	            <ul class="collapse list-unstyled" id="homeSubmenu2">
              <li>
                    <a href="#" onclick="showListZona('Recoleta');">Recoleta &nbsp;<span class="badge rounded-pill bg-primary">3</span></a>
                </li>
                <li>
                    <a href="#" onclick="showListZona('Las Cañitas');">Las Cañitas &nbsp;<span class="badge rounded-pill bg-primary">6</span></a>
                </li>
                <li>
                    <a href="#" onclick="showListZona('Palermo');">Palermo &nbsp;<span class="badge rounded-pill bg-primary">17</span></a>
                </li>
                <li>
                <a href="#" onclick="showListZona('Belgrano');">Belgrano &nbsp;<span class="badge rounded-pill bg-primary">4</span></a>
                </li>
               
	            </ul>
	          </li>
	          </li>
	          <li>
              <a href="aboutus.php">Acerca de nosotros</a>
	          </li>
	          <li>
              <a href="howpublish.php">Como publicarse</a>
	          </li>
            <li>
              <a href="politica_privacidad.php">Política de privacidad</a>
	          </li>
	        </ul>

	        <div class="footer">
	        	<p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib.com</a>
						  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
	        </div>

	      </div>
    	</nav>

        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container-fluid">

            <button type="button" id="sidebarCollapse" class="btn btn-primary">
              <i class="fa fa-bars"></i>
              <span class="sr-only">Toggle Menu</span>
            </button>
            <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="nav navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="aboutus.php">Acerca de nosotros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="howpublish.php">Como publicarse</a>
                </li>
                
              </ul>
            </div>
          </div>
        </nav>

<br>
<!-- ENCABEZADO-->
<div class="custom-container container">
	<div class="template">
		<div class="row">
			<div class="col-sm-4 col-md-4 col-lg-4" align="left"> 
			</a>
			</div>
			<div class="col-sm-8 col-md-8 col-lg-8" valign="center" align="center"> 
				<!--<p class="h1"  align="left">Guía de Buenos Aires</p>--> 
				<h1 align="left"><font color ="white">ChicasLindas.com</font></h1>
			</div>
		</div> <!--row-->
	</div> <!--template-->
</div> <!--container-->
<!-- FIN DEL ENCABEZADO -->
<br>

<br>

<div class="container" >
<div class="template">
<span class="example">
<div class="container-fluid">
	<br><br>
  <h1 class="h1"><font color ="white">Diamond</font></h1>		
<div class="row" >
	
				<br>		<br>
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
    
    $foto = "faces/face" .rand(100, 113) . ".jpg" ;
?>
<div class="col-xs-4 col-sm-6 col-md-4 col-lg-4"  >	
<div style="width: 48%; float:left">

<div class="card border-primary mb-4">
  <img class="card-img-top" src="faces/face111.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>

        </div>

        <div style="width: 48%; float:right;" align="right">
        <div class="card border-warning mb-4" >
  <img class="card-img-top" src="faces/face110.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
        </div>
 
   
</div>	

<?php
}  //fin de bucle
?>
			
</div> <!-- row gutter-30 -->
</div> <!-- container-fluid -->
</span>	
</div> <!-- template -->
</div> <!-- custom-container container -->
</div></div></div>
<br><br><br><br>
<!--pie de pagina-->
<?php 
//require "include/db_conect_close.inc";
include 'include/footer.inc';
?> 

</body>

</html>
