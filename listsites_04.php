<?php 

//$categoria = $_GET['categoria'];




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










	
//$parametros = "categoria=" . $_GET['categoria'] . "&lat=".$lat . "&lon=".$lon;






if( isset($_GET['group']) )
{
    $parametros = "group=".$_GET['group'];
   
} 

if( isset($_GET['categoria']) )
{
    $parametros = "categoria=".$_GET['categoria'];
   
} 

if( isset($_GET['zona']) )
{
    $parametros = "zona=".$_GET['zona'];
   
} 
    


//print $parametros;
//--------------------------------------

//$url = "http://localhost/buenosairestop/get_sites.php?categoria=" . $_GET['categoria'];
//$url = "https://serviciomadriz.online/buenosairestop/get_sites.php?" . $parametros;

//$url = "https://topbuenosaires.online/get_sites.php?" . $parametros;
$url = "http://ec2-3-138-102-101.us-east-2.compute.amazonaws.com/chicas/get_info.php?". $parametros;


//echo $url;
// $_GET['categoria'];
$data = file_get_contents($url);
$products = json_decode($data,true);

?>

<!doctype html>
<html lang="en">
  <head>
  	<title>Lo mejor de Buenos Aires</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/style.css">
        
    <?php include 'include/mixpanel.inc';?>
	<?php include 'include/mixp_functions.inc';?>
   


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
  background-image: linear-gradient(#4C68F4 , #12498c);
}


    
    /* Display rate count */    
    .reviewCount, .reviewScore {font-size: 12px; color: #666666; margin-left: 5px;}
    .reviewScore {font-weight: 600;}
    /* Display rate count Ends*/        
    </style>

<style type="text/css">
*{margin:0; padding:0; font-family: sans-serif;}
.div3 { border: 5px solid; height: 60px; width: 260px; margin:10px; background-color:yellow;
font-size: 20px; text-align:center; padding-top: 20px; word-wrap:break-word; }
.header2 {margin: 15px 0 -15px 40px;}
</style>
  
  </head>
  <body class="example">
		
		<div class="wrapper d-flex align-items-stretch">
			  <nav id="sidebar">
				    <div class="p-4 pt-5">
		  		    <a href="#" class="img logo rounded-circle mb-5" style="background-image: url(images/logo.jpg);"></a>
	            <ul class="list-unstyled components mb-5">
              <li>
                  <a href="listsites_04.php?group=categoria">Inicio</a>
	              </li>
	              <li class="active">
	                <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Categorías  &nbsp;<font size=2><span class="badge rounded-pill bg-light text-dark">22</span></font></a>
	                <ul class="collapse list-unstyled" id="homeSubmenu">
                    <li>
                    <a href="listsites_04.php?categoria=diamond">Diamond &nbsp;<span class="badge rounded-pill bg-primary">3</span></a>
                    </li>
                    <li>
                    <a href="listsites_04.php?categoria=gold">Gold &nbsp;<span class="badge rounded-pill bg-primary">12</span></a>
                    </li>
                    <li>
                    <a href="listsites_04.php?categoria=silver">Silver &nbsp;<span class="badge rounded-pill bg-primary">3</span></a>
                    </li>
                    <li>
                    <a href="listsites_04.php?group=categoria">Todas &nbsp;<span class="badge rounded-pill bg-primary">3</span></a>
                    </li>
                   
	                </ul>
	              </li>
	              
	             
                <li class="active">
	                <a href="#homeSubmenu2" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Zonas</a>
	                <ul class="collapse list-unstyled" id="homeSubmenu2">
                    <li>
                    <a href="listsites_04.php?zona=palermo">Palermo &nbsp;<span class="badge rounded-pill bg-primary">3</span></a>
                    </li>
                    <li>
                    <a href="listsites_04.php?zona=recoleta">Recoleta &nbsp;<span class="badge rounded-pill bg-primary">6</span></a>
                    </li>
                    <li>
                    <a href="listsites_04.php?zona=belgrano">Belgrano &nbsp;<span class="badge rounded-pill bg-primary">17</span></a>
                    </li>
                    <li>
                    <a href="listsites_04.php?zona=microcentro">Microcentro &nbsp;<span class="badge rounded-pill bg-primary">4</span></a>
                    </li>
                    <li>
                        <a href="listsites_04.php?group=zona">Todas</a>
	                  </li>
                   </ul>
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
                    <a class="nav-link" href="listsites_04.php?group=categoria">Inicio</a>
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
      
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>


    <form id="formulario" name="formulario">
  
   <input type="hidden" name="latt" id="latt"/>
   <input type="hidden" name="lont" id="lont"/>
				
          </form>

<div class="container" >
  <div class="template">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"  >
        <h2 class="mb-4" ><font color=#f5f3f2>Lo mejor de Buenos Aires</font></h2>
        <p><font color=#ede8e6>Conoce las mejores opciones de la ciudad. Podrás consultar la selección VIP.</font></p>
        <br>             
        
      </div>
			<br><br>
<?php

$max = "5"; // Numero total de imagenes
$extension2 = ".png";// Definimos la extension, puede ser .jpg, gif, bmp, etc.
$carpeta2 = "../imagenes/apps/estrellas";//Carpeta con las imagenes
$start = "2";

//$row = $products;
//var_dump($products);
$longitud = count($products);
//echo $longitud;
//while($row = $products->fetch_assoc()) {
  //foreach ($products as $row) {

for($y=0; $y<$longitud; $y++) {
  $arreglo = array();
  $arreglo = $products[$y][1];
  
  $longitud2 = count($arreglo); ?>
  
  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"  >
                     
        <h2><font color=#edb25f><?php print $products[$y][0]['Grupo']; ?></font></h2>
      </div>


  <?php
  for($i=0; $i<$longitud2; $i++) {
 // $row = $products[$i];
 $row = $arreglo[$i];
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
<div class="card text-white bg-dark mb-4">
<a href="chicas/show_info.php?id=<?php print $row['codi_negocio'];?>" target="_blank" >
  <img class="card-img-top" src="faces/<?php print $row['imagen_negocio']; ?>" alt="Card image cap" height="250">
 </a> 
  <div class="card text-center">
  <div class="card-body" style="background-color:#ebe9e8" >
  
    
  
    
  <p class="card-text">
      <a href="chicas/show_info.php?id=<?php print $row['codi_negocio'];?>" target="_blank" >
    <font color=#bd0909 face="arial"><?php print strtoupper($row['nomb_negocio']); ?> - <?php print $row['edad'];?></font>  </a>  
   </p>
     
      <button type="button" class="btn btn-outline-dark"> 
      <a href="listsites_04.php?zona=<?php print $row['zona']; ?>">
      <p class="card-text"><small class="text-muted">
      <?php print $row['zona']; ?>
      </small></p></a>
      </button>
 
  </div>
</div>
</div>
</div>

<?php  

$i = $i+1;
//print $i;
if ($i < $longitud2)
  {
  // print $i;
$row = $arreglo[$i];
 ?>

<div style="width: 48%; float:right;" align="right">
<div class="card text-white bg-dark mb-4" >
<a href="chicas/show_info2.php?id=<?php print $row['codi_negocio'];?>" target="_blank" >
  <img class="card-img-top" src="faces/<?php print $row['imagen_negocio']; ?>" alt="Card image cap" height="250">
 </a> 
 <div class="card text-center">
   <div class="card-body" style="background-color:#ebe9e8">
 

  
    
      <p class="card-text">
      <a href="chicas/show_info2.php?id=<?php print $row['codi_negocio'];?>" target="_blank" >
    <font color=#bd0909 face="arial"><?php print strtoupper($row['nomb_negocio']); ?> - <?php print $row['edad'];?></font>  </a>   </p>
     
    <button type="button" class="btn btn-outline-dark"> 
      <a href="listsites_04.php?zona=<?php print $row['zona']; ?>">
      <p class="card-text"><small class="text-muted">
      <?php print $row['zona']; ?>
      </small></p></a>
      </button>
 
  </div>
</div></div>
</div>
<?php   }  ?>
   
</div>	<!-- <div class="col-xs-4 col-sm-6 col-md-4 col-lg-4"  >	 -->

<?php
} 
 //fin de bucle
 //$y = $y+1;
}
?>
			
</div> <!-- row gutter-30 -->

	
</div> <!-- template -->
</div> <!-- custom-container container -->
</div>

  </body>
  <script>
if (navigator.geolocation){ //check geolocation available 
    //try to get user current location using getCurrentPosition() method
    navigator.geolocation.getCurrentPosition(function(position){ 
            console.log("Found your location nLat : "+position.coords.latitude+" nLang :"+ position.coords.longitude);
			document.formulario.latt.value = position.coords.latitude;
			document.formulario.lont.value = position.coords.longitude;
        });
}else{
    console.log("Browser doesn't support geolocation!");
	document.formulario.latt.value = "-34.6037389";
	document.formulario.lont.value = "-58.3815704";
}
  </script>


</html>