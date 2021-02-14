<!DOCTYPE html>
<html lang="en">

<head>
  <?php include 'include/head.inc';?>
  <!-- BOTON WHATSAPP ME -->
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

$('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})
</script>
<!-- /GetButton.io widget -->
</head>


<body>




<!-- logo y titulo-->
<div class="container">
<div class="template">
	<div class="row">
		<div class="col-sm-4 col-md-4 col-lg-4" align="left"> 
			<a href="index.php"><img src="images/app/utils/logo2.jpg"  alt="" longdesc="" id="img_logo"  height="62" width="130">
			</a>
		</div>
		<div class="col-sm-8 col-md-8 col-lg-8" align="left"> 
			<p class="h2"  align="left" color=#086A87>Buenos Aires Top</p> 
		</div>
	</div>
</div> <!-- template-->
</div> <!-- container-->

<div class="container" >
<!--membrete general-->
<?php include 'include/membrete_02.inc';?>

</br></br>

<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-9" align="center">
		<h2><font color=#086A87>Como podés publicarte</h3>
		<br><br>
		<font color=#0B2161 align="justify">
        <h4>Si querés publicarte en nuestro directorio solo debés contactarnos por cualquiera de las opciones que indicamos abajo. Solo rquerimos nos hagas llegar información que nos permita saber:
            </p>
                 <ol>
  <li>Nombre de tu emprendimiento/negocio.</li>
  <li>Dirección de tu negocio.</li>
  <li>URL de tu página web, número de teléfono. (Opcional)</li>
</ol> 
        <br>

		Requisitos para poder ser publicado en nuestro directorio.</p>
        <ul>
  <li>Ser un emprendimiento/negocio real relacionado a las clasificaciones de este site.</li>
  <li>Estás bien calificado en los diferentes rankeos de usuarios. (Ejemplo: Reviews en google place)</li>
  <li>Estás ubicado en la ciudad de Buenos Aires.</li>
</ul> 

 		<br><br>

         <h4>Canales de comunicación
            </p>
                 <ol>
  <li>Whastapp  <a href="https://api.whatsapp.com/send?phone=+541127835577&text=Hola quiero contactarlos sobre una publicación en *https://topbuenosaires.online*." target="blank" >
              <img src="images/app/utils/whatsapp_ico.png"  height="22" width="22"><br></li>
  <li>Correo electrónico. <a href="mailto:buenosairestopinfo@gmail.com" target="_blank" class="btn btn-primary">Email Us</a></li>
  <li>Chat online</li>
</ol> 
		
		<br><br>Un cordial saludo.

	</div> 

</div> 
 <br>
<?php 
include 'include/footer_v2.inc';
?>
</body>