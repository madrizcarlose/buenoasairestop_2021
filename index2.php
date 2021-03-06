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
    <?php include 'include/onesignal.inc';?>
    <script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="a8ec3d4e-c65e-4420-b22e-9b221c4b4c23";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>
  </head>
  <body>
		
		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar">
				<div class="p-4 pt-5">
		  		<a href="#" class="img logo rounded-circle mb-5" style="background-image: url(images/logo.jpg);"></a>
	        <ul class="list-unstyled components mb-5">
	          <li class="active">
	            <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Inicio</a>
	            <ul class="collapse list-unstyled" id="homeSubmenu">
                <li>
                    <a href="#"  onclick="openPage('restaurants.php');" >Restaurantes</a>
                </li>
                <li>
                    <a href="#" onclick="showList('c020');">Bares</a>
                </li>
                <li>
                    <a href="#">Actividades</a>
                </li>
                <li>
                  <a href="#">Sitios Turísticos</a>
              </li>
	            </ul>
	          </li>
	          
	          <li>
              <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Restaurantes</a>
              <ul class="collapse list-unstyled" id="pageSubmenu">
                
                <li>
                    <a href="#">Asados</a>
                </li>
                <li>
                    <a href="#">Italiana</a>
                </li>
                <li>
                  <a href="#">Oriental</a>
              </li>
              <li>
                <a href="#">Sur Americana</a>
            </li>
              </ul>
	          </li>
	          <li>
              <a href="aboutus.php">Acerca de nosotros</a>
	          </li>
	          <li>
              <a href="howpublish.php">Como publicarse</a>
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
                    <a class="nav-link" href="#">Acerca de nosotros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Politica privacidad</a>
                </li>
                
              </ul>
            </div>
          </div>
        </nav>

        <h2 class="mb-4">Los mejor de Buenos Aires</h2>
        <p>Consulta las mejopres opciones de la cliudad de Buenos Aires. Podrás consultar la selección de los sitios mejores rankeados en la ciudad.</p>
      
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
      <!-- opcion Actividades-->
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
        <!-- <a href="listsites.php?categoria=r000"><p class="h1">Actividades</p> -->
         <a href="#" onclick="showList('c010');"><p class="h1">Sitios turísticos</p>
        <img src="images/app/menu/opt_sites.jpg" width="120" height="75" alt="Actividades" longdesc="Actividades" id="img_acti" /></a>
        <p class="text_menu">Parques, museos, plazas,...</p>
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
      
      
      </div>
		</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>


    <form id="formulario" name="formulario">
  
   <input type="hidden" name="latt" id="latt"/>
   <input type="hidden" name="lont" id="lont"/>
				
          </form>
  </body>
</html>