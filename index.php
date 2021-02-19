<?php
require 'include/db_connection.php';
//version enero6
// if(!isset($_SESSION['login_id'])){
 //   header('Location: login.php');
 //   exit;
//}

$id = $_SESSION['login_id'];
$get_user = mysqli_query($db_connection, "SELECT * FROM `users` WHERE `google_id`='$id'");

if(mysqli_num_rows($get_user) > 0){
    $user = mysqli_fetch_assoc($get_user);
	
}
else{
   // header('Location: logout.php');
   // exit;
   
}
?>

<!DOCTYPE html>
<html lang="en">
<head>

	<?php include 'include/head.inc';?>
	<?php include 'include/mixpanel.inc';?>
	<?php include 'include/mixp_functions.inc';?>
	<?php include 'include/onesignal.inc';?>
	
	<!-- Bootstrap
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	 Bootstrap --> 
	<link rel="stylesheet" href="include/styles.css">
	<link rel="stylesheet" href="include/styles_login.css">

	<title>Buenos Aires Top - Las mejores opciones donde comer, donde divertirse, seguros de vehículos.</title>
</head>

<body>
<!--MENU-->
<div class="container" >
<div class="template">
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"  >	
<nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <!-- Brand -->
 
 <a class="navbar-brand" href="#">Menú</a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

<!-- Navbar links -->
<div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
	
	  <li class="nav-item">
        <a class="nav-link" href="howpublish.php" target='popup'  onclick="window.open('howpublish.php','popup','width=600,height=600,toolbar=no,menubar=no'); return false;">
   Como publicarse</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="aboutus.php" target='popup'  onclick="window.open('aboutus.php','popup','width=600,height=600'); return false;">
   Acerca de nosotros</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="aboutus.php" target='popup'  onclick="window.open('politica_privacidad.php','popup','width=600,height=600'); return false;">
		Política de privacidad</a>
      </li>
      
    </ul>
  </div>
</nav>
</div>
</div> <!--row-->
</div> <!-- template -->
</div> <!--container-->

<!--FIN MENU-->
<br>
<!-- logo y titulo-->

<!-- encabezado-->
<div class="container" >
<div class="template">
<div class="row">
	<div style="float:left;width: 70%;">
	<div class="col-sm-4 col-md-4 col-lg-4" align="left"> 
			<a href="index.php"><img src="images/app/utils/logo_BA.png"  alt="" longdesc="" id="img_logo"  height="62" width="130">
			</a>
		</div>
		<div class="col-sm-8 col-md-8 col-lg-8" align="left"> 
			<p class="h2"  align="left">Guía de Buenos Aires</p> 
	
		</div>
	</div> <!-- float al 70% -->
		<!--	</div>
			<div class="col-sm-6 col-md-3 col-lg-2" valign="center" align="right">  -->
<?php
if(isset($_SESSION['login_id']) == TRUE){
//  if ($user['name'] != NULL) {
?>
	<div style="float:right;width: 30%;">
 		<div class="_container">       			
        <div class="_info">
			<div class="_img" align="center">
            	<img src="<?php echo $user['profile_image']; ?>" alt="<?php echo $user['name']; ?>">
        	</div>
            <p style style="line-height: 50%"><?php echo $user['name']; ?></p>
            <p style style="line-height: 50%"><?php echo $user['email']; ?></p>
            <a href="logout.php">Logout</a>
        </div> <!-- info -->
		</div> <!-- container -->
	</div> <!-- float al 30% -->
<?php
}
else{ 
	 
	//require 'db_connection.php';

	//if(isset($_SESSION['login_id'])){
	//	header('Location: index.php');
	//	exit;
	//}
	
	require 'google_login/google-api/vendor/autoload.php';
	
			// Creating new google client instance
	$client = new Google_Client();
	
	// Enter your Client ID
	$client->setClientId('432882886420-uvdm69kl8nb2b19b2es2o7a3ttct5on4.apps.googleusercontent.com');
	// Enter your Client Secrect
	$client->setClientSecret('0KSoCti3JgsmtmNq6VbSyr5g');

	// Enter the Redirect URL
	//$client->setRedirectUri('https://serviciomadriz.online/buenosairestop/login.php');
	$client->setRedirectUri('https://topbuenosaires.online/login.php');
	
	
	// Adding those scopes which we want to get (email & profile Information)
	$client->addScope("email");
	$client->addScope("profile"); 
	 ?>		
	<div align="right" style="float:left;width: 30%;">
		<p style style="line-height: 100%">
		<a href="<?php echo $client->createAuthUrl(); ?>">
		<img src="images/app/utils/login-google.png"  alt="" longdesc="" id="img_logo" height="22" width="70">
		</a><br>
		<!-- Button to Open the Modal -->
  		<button type="button" class="btn btn-link" data-toggle="modal" data-target="#myModal2" align="right">
  		<small align="right">¿Porque loguearme?</small>
  		</button></p>
	</div> <!-- float al 30% -->
<?php 
}
 ?>
 <!-- </div> -->

</div> <!--row-->
</div> <!-- template -->
</div> <!--container-->


<!-- link OneSignal que es el de push notifications -->
<div class="container" align="right">
<div class="template" align="right">
<div class="row" align="right">
	<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6"></div>
	<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
		<div class='onesignal-customlink-container' align="right"></div>
		
	</div>
</div></div></div> 
<!-- fin del link OneSignal que es el de push notifications -->

<br>
 <!-- opciones del menu-->  
<div class="container" >
<div class="template">
    <div class="row">
		<!-- opcion Restaurantes-->
		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
		    <a href="#" onclick="openPage('restaurants.php');"><p class="h1">Restaurantes</p>
			<img src="images/app/menu/opt_comidas.jpeg" width="120" height="75" alt="Restaurantes" longdesc="Restaurantes" id="img_rest" /></a>
		   <p class="text_menu">Carnes, pescado, pastas, pizzas, asiática..</p>
		   <hr>
		    <br>
        </div>
		<!-- opcion Bares-->
		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
		  <!-- <a href="listsites.php?categoria=c020"><p class="h1">Bares</p> -->
		   <a href="#" onclick="showList('c020');"><p class="h1">Bares</p>
			<img src="images/app/menu/opt_bares.jpg" width="120" height="75" alt="Bares" longdesc="Bares" id="img_bar" /></a>
			<p class="text_menu">Cervezas y mas bebidas</p>
		   <hr>  
		    <br>
		</div>
		<!-- opcion Actividades-->
    	<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
		  <!-- <a href="listsites.php?categoria=r000"><p class="h1">Actividades</p> -->
		   <a href="#" onclick="showList('r000');"><p class="h1">Actividades</p>
			<img src="images/app/menu/opt_funny.jpg" width="120" height="75" alt="Actividades" longdesc="Actividades" id="img_acti" /></a>
			<p class="text_menu">Parques, karting, tenis, golf,...</p>
		   <hr>  
		   <br>
		</div>
		<!-- opcion Servicios-->
		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
		 <!--   <a href="services.php"><p class="h1">Serv. y productos</p> -->
		   <a href="#" onclick="openPage('services.php');"><p class="h1">Serv. y productos</p>
			<img src="images/app/menu/opt_servprof.jpeg" width="120" height="75" alt="Servicios y productos" longdesc="Servicios y productos" id="img_serv" /></a>
			<p class="text_menu">Seguros, salud, estética, ...</p>
		   <hr>    
		</div>			
	</div> <!--div row -->
</div>  <!--div template -->
</div> <!-- class="container" -->

<br><br><br><br><br><br><br><br>
<!--pie de pagina-->
<?php 
include 'include/footer.inc';
?>

<!-- DIV PARA MOSTRAR POOPUP INFO DE PORQUE LOGUEARME -->
<div class="container">
  <!-- The Modal -->
  <div class="modal" id="myModal2">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">¿Por que loguearme?</h4>
          <button type="button" class="close" data-dismiss="modal">×</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
		  <h4>El login es opcional.</h4>
		  <br>
          <font size="2"><p>El acceso a este sitio es totalmente <strong>gratis</strong>,aun así, tenemos contenido detallado en nuestro directorio que solo puede ser visto por usuarios logueados.</p>
          <p>Adicionalmente, al loguarte podrás ser notficada(o) de las actualizaciones o promociones mas recientes de los diferentes sitios listados en nuestro directorio.</p>
		<br>
          <p>Tu logín no será usado para enviarte correo span o publicidad.</p></font5>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
        </div>
        
      </div>
    </div>
  </div> 
</div>
<!-- FIN DE DIV PARA MOSTRAR POOPUP INFO DE PORQUE LOGUEARME -->

<form id="formulario" name="formulario">
  
   <input type="hidden" name="latt" id="latt"/>
   <input type="hidden" name="lont" id="lont"/>
				
          </form>

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