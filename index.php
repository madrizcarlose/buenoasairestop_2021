<?php
require 'db_connection.php';

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

	
	<!-- Bootstrap
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	 Bootstrap --> 
	<link rel="stylesheet" href="include/styles.css">

	<style>
        *,
        *::before,
        *::after {
            box-sizing: border-box;
            -webkit-box-sizing: border-box;
        }
        ._bodyxx{
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f7f7ff;
            padding: 10px;
            margin: 0;
        }
        ._container{
            max-width: 400px;
            background-color: #ffffff;
            padding: 20px;
            margin: 0 auto;
            border: 1px solid #cccccc;
            border-radius: 2px;
        }

        ._img{
            overflow: hidden;
            width: 50px;
            height: 50px;
            margin: 0 auto;
            border-radius: 50%;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
        }
        ._img > img{
            width: 50px;
            min-height: 50px;
        }
        ._info{
            text-align: center;
        }
        ._info h1{
            margin:10px 0;
            text-transform: capitalize;
        }
        ._info p{
            color: #555555;
        }
        ._info a{
            display: inline-block;
            background-color: #E53E3E;
            color: #fff;
            text-decoration: none;
            padding:5px 10px;
            border-radius: 2px;
            border: 1px solid rgba(0, 0, 0, 0.1);
        }
    </style>


	
 	<title>Buenos Aires Top - Las mejores opciones donde comer, donde divertirse, seguros de vehículos.</title>
</head>

<body>
<br>
<!-- encabezado-->
<div class="container" >
	<div class="template">
		<div class="row">
			<div class="col-sm-4 col-md-4 col-lg-4" align="left"> 
		  		<img src="images/app/utils/logo2.jpg"  alt="" longdesc="" id="img_logo"  height="62" width="130">
			</div>
			<div class="col-sm-8 col-md-8 col-lg-8" valign="center" align="center"> 
				<!--<p class="h1"  align="left">Guía de Buenos Aires</p>--> 
				<h1 align="left">Guía de Buenos Aires</h1>
			</div>
		</div> <!--row-->
	</div>
</div> <!--container-->

<br><br>
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

<!-- GetButton.io widget -->
<script type="text/javascript">
(function () {
var options = {
whatsapp: "+5491127835577", // WhatsApp number
call_to_action: "Envíanos un mensaje", // Call to action
position: "left", // Position may be 'right' or 'left'
};
var proto = document.location.protocol, host = "getbutton.io", url = proto + "//static." + host;
var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
})();
</script>
<!-- /GetButton.io widget -->
  
<br><br><br><br><br><br><br><br>
<!--pie de pagina-->
<?php 
include 'include/footer.inc';
?>
<?php
 if ($user['name'] != NULL) {
?>

 <div class="_container">
        <div class="_img">
            <img src="<?php echo $user['profile_image']; ?>" alt="<?php echo $user['name']; ?>">
        </div>
        <div class="_info">
            <h5><?php echo $user['name']; ?></h5>
            <p><?php echo $user['email']; ?></p>
            <a href="logout.php">Logout</a>
        </div>
    </div>
<?php
 }
 ?>

</body>
</html>