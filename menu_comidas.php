<!DOCTYPE html>
<html lang="en">
<head>
<?php include 'include/head.inc';?>
<?php include 'include/membrete_00.inc';?>
<!-- Bootstrap -->

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<!-- Bootstrap --> 
<link rel="stylesheet" href="include/styles.css">

 <title>Buenos Aires TP - Las mejores opciones donde comer, donde divertirse, mejores seguros.</title>


</head>

<body bgcolor="#afafaf">
<img src="images/app/utils/logo2.jpg"  alt="" longdesc="" id="img_logo"  height="62" width="130">


<div class="container-fluid" style="background-color:#FFFFFF;" >
	<div class="row">
		<div class="col-sm-4 col-md-4 col-lg-4"> 
		<a href="index.php"><img src="images/app/utils/logo2.jpg"  alt="" longdesc="" id="img_logo"  height="62" width="130">
		</a>
		</div>
		<div class="col-sm-8 col-md-8 col-lg-8"> 
		<p class="h2"  align="left">Restaurantes en Buenos Aires xx</p> 
		</div>
	</div>
</div>
<br><br>

<div class="container" >
    <div class="row">
		<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
			<a href="listsites.php?categoria=c003"><p class="h1">Asados</p>
			<img src="images/app/menu/com_carne.jpeg" width="120" height="75" alt="Asados" longdesc="Asados" id="img_asad" /></a>
			<h5><p class="text_menu">Asados, parillas, carnes..</p></h5>
		   <hr>
        </div> 
		
		<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
           <a href="listsites.php?categoria=c006"><p class="h1">Pescados, Mariscos</p>
			<img src="images/app/menu/com_pescado.jpeg" width="120" height="75" alt="Pescados y Mariscos" longdesc="Pescados y Mariscos" id="img_pesc" /></a>
			<p class="text_menu">Pescados, mariscos, paellas..</p>
		   <hr>  
		</div>
	
		<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
           <a href="listsites.php?categoria=c008"><p class="h1">Italiana</p>
			<img src="images/app/menu/com_italiana.jpeg" width="120" height="75" alt="Italiana" longdesc="Italiana" id="img_ital" /></a>
			<p class="text_menu">Pastas y pizzas,..</p>
		   <hr>  
		</div>
		
   		 <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
           <a href="listsites.php?categoria=c009"><p class="h1">Oriental</p>
			<img src="images/app/menu/com_oriental.jpeg" width="120" height="75" alt="Oriental" longdesc="Oriental" id="img_orie" /></a>
			<p class="text_menu">Arabe, Siria, China, Japonesa,..</p>
		   <hr>  
		</div>
	
		<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
           <a href="listsites.php?categoria=c010"><p class="h1">Sur Americana</p>
			<img src="images/app/menu/com_suramerica.jpg" width="120" height="75" alt="Sur Americana" longdesc="Sur Americana" id="img_sura" /></a>
			<p class="text_menu">Colombiana, Venezolana, Peruana,..</p>
		   <hr>  
		</div>
		
		<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
           <a href="listsites.php?categoria=c011"><p class="h1">Hamburguesas</p>
			<img src="images/app/menu/com_burger.jpg" width="120" height="75" alt="Hamburguesas" longdesc="Hamburguesas" id="img_hamb" /></a>
			<p class="text_menu">Mejores hamburguesas de la ciudad...</p>
		   <hr>  
		</div>	
	</div> <!--div row-->
</div> <!-- class="container" -->

</br></br>
 
<!--pie de pagina-->
<?php include 'include/footer.inc';?>

</body>
</html>