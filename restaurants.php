<!DOCTYPE html>
<html lang="en">
<head>
	<?php include 'include/head.inc';?>
	<?php include 'include/mixpanel.inc';?>
	<?php include 'include/mixp_functions.inc';?>

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
			<p class="h2"  align="left">Restaurantes en Buenos Aires</p> 
	
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
			<!-- <a href="listsites.php?categoria=c003"><p class="h1">Asados</p> -->
			<a href="#" onclick="showList('c003');"><p class="h1">Asados</p>
			<img src="images/app/menu/com_carne.jpeg" width="120" height="75" alt="Asados" longdesc="Asados" id="img_asad" /></a>
			<h5><p class="text_menu">Asados, parillas, carnes..</p></h5>
		   <hr>
		</div> 
		<!-- opciondesayunos -->
		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
			<a href="#" onclick="showList('c001');"><p class="h1">Desayunos & Café</p>
			<img src="images/app/menu/com_desayuno.jpg" width="120" height="75" alt="Desayunos" longdesc="Desayunos" id="img_desa" /></a>
			<h5><p class="text_menu">Cafe..</p></h5>
		   <hr>
        </div> 
		<!-- opcion pescados -->
		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
		   <!--<a href="listsites.php?categoria=c006"><p class="h1">Pescados, Mariscos</p> -->
		   <a href="#" onclick="showList('c006');"><p class="h1">Pescados, Mariscos</p>
			<img src="images/app/menu/com_pescado.jpeg" width="120" height="75" alt="Pescados y Mariscos" longdesc="Pescados y Mariscos" id="img_pesc" /></a>
			<p class="text_menu">Pescados, mariscos, paellas..</p>
		   <hr>  
		</div>
		<!-- opcion italiana -->
		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
		  <!--  <a href="listsites.php?categoria=c008"><p class="h1">Italiana</p> -->
		   <a href="#" onclick="showList('c008');"><p class="h1">Italiana</p>
			<img src="images/app/menu/com_italiana.jpeg" width="120" height="75" alt="Italiana" longdesc="Italiana" id="img_ital" /></a>
			<p class="text_menu">Pastas y pizzas,..</p>
		   <hr>  
		</div>
		<!-- opcion oriental -->
   		 <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
		  <!--  <a href="listsites.php?categoria=c009"><p class="h1">Oriental</p> -->
		   <a href="#" onclick="showList('c009');"><p class="h1">Oriental</p>
			<img src="images/app/menu/com_oriental.jpeg" width="120" height="75" alt="Oriental" longdesc="Oriental" id="img_orie" /></a>
			<p class="text_menu">Arabe, Siria, China, Japonesa,..</p>
		   <hr>  
		</div>
		<!-- opcion suramericana -->
		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
		   <!-- <a href="listsites.php?categoria=c010"><p class="h1">Sur Americana</p> -->
		   <a href="#" onclick="showList('c010');"><p class="h1">Sur Americana</p>
			<img src="images/app/menu/com_suramerica.jpg" width="120" height="75" alt="Sur Americana" longdesc="Sur Americana" id="img_sura" /></a>
			<p class="text_menu">Colombiana, Venezolana, Peruana,..</p>
		   <hr>  
		</div>
		<!-- opcion hamburguesas -->
		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
		  <!--  <a href="listsites.php?categoria=c011"><p class="h1">Hamburguesas</p> -->
		   <a href="#" onclick="showList('c011');"><p class="h1">Hamburguesas</p>
			<img src="images/app/menu/com_burger.jpg" width="120" height="75" alt="Hamburguesas" longdesc="Hamburguesas" id="img_hamb" /></a>
			<p class="text_menu">Mejores hamburguesas de la ciudad...</p>
		   <hr>  
		</div>	
	</div> <!--div row-->
</div>  <!--div template-->
</div> <!-- class="container" -->

</br></br></br></br></br></br>
 
<!--pie de pagina-->
<?php include 'include/footer.inc';?>
<form id="formulario" name="formulario">
  
   <input type="text" name="latt" id="latt"/>
   <input type="text" name="lont" id="lont"/>
   <script type="text/javascript" src="https://colppy.atlassian.net/s/d41d8cd98f00b204e9800998ecf8427e-T/o2joag/b/24/a44af77267a987a660377e5c46e0fb64/_/download/batch/com.atlassian.jira.collector.plugin.jira-issue-collector-plugin:issuecollector/com.atlassian.jira.collector.plugin.jira-issue-collector-plugin:issuecollector.js?locale=es-ES&collectorId=d8e0e732"></script>
	
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
    document.formulario.latt.value = "mmmm";
}
  </script>
</html>