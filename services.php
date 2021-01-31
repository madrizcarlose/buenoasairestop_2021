<!DOCTYPE html>
<html lang="en">
<head>
	<?php include 'include/head.inc';?>
	<!-- 
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 	--> 
	<link rel="stylesheet" href="include/styles.css">
	<title>Buenos Aires TP - Las mejores opciones donde ir a comer</title>
</head>

<body bgcolor="#afafaf">
<br>
<!-- logo y titulo-->
<div class="container">
<div class="template">
	<div class="row">
		<div class="col-sm-4 col-md-4 col-lg-4" align="left"> 
			<a href="index.php"><img src="images/app/utils/logo2.jpg"  alt="" longdesc="" id="img_logo"  height="62" width="130">
			</a>
		</div>
		<div class="col-sm-8 col-md-8 col-lg-8" align="left"> 
			<p class="h2"  align="left">Servicios</p> 
		</div>
	</div>
</div> <!-- template-->
</div> <!-- container-->
<br><br>

<!-- opciones de menu -->

<div class="container" >
<div class="template">
    <div class="row">
		<!-- opcion asados -->
		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
			<a href="listsites.php?categoria=s001"><p class="h1">Inmobiliarias</p>
			<img src="images/app/menu/ser_inmob.jpg" width="120" height="75" alt="Inmobiliaria" longdesc="Inmobiliaria" id="img_inmob" /></a>
			<h5><p class="text_menu">Alquiler y ventas de propiedades</p></h5>
		   <hr>
        </div> 
		<!-- opcion pescados -->
		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
           <a href="listsites.php?categoria=s002"><p class="h1">Seguros</p>
			<img src="images/app/menu/ser_seguro.jpg" width="120" height="75" alt="Seguros" longdesc="Seguros" id="img_segu" /></a>
			<p class="text_menu">Seguros de vehículos, motos, inmuebles..</p>
		   <hr>  
		</div>
		
	</div> <!--div row-->
</div>  <!--div template-->
</div> <!-- class="container" -->

</br></br></br></br></br></br>
 
<!--pie de pagina-->
<?php include 'include/footer.inc';?>

</body>
</html>