<!DOCTYPE html>
<html lang="en">
<head>


<!-- Bootstrap -->

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<!-- Bootstrap --> 


  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<?php

if (1 == 1) {

$url = "https://maps.googleapis.com/maps/api/place/details/json?place_id=ChIJyQnOXJa1vJUR4LR8JHlnZpw&key=AIzaSyDG-R6WTvqjWqLb-01oG4LV7HV_az9Ajhw" ;
$json = file_get_contents($url);
var_dump(json_decode($json));
print ("<br>");
//var_dump(json_decode($json, true));
$array = json_decode($json, true);
$xx = $array['result'];
print ($xx['name']);

$foto  = $xx['photos'][1]['photo_reference'];

$array =  $xx['photos'];
$array = array_slice( $xx['photos'], 0, 5);  
foreach ($array as &$valor) {
    print ("<br>");
   print $valor['photo_reference'];
   print ("<br>");
   $url_foto = "https://maps.googleapis.com/maps/api/place/photo?maxwidth=400&photoreference=" . $valor['photo_reference'] ."&key=AIzaSyDG-R6WTvqjWqLb-01oG4LV7HV_az9Ajhw" ;
   $furl = false;
   // First check response headers
   $headers = get_headers($url_foto);
   // Test for 301 or 302
   if(preg_match('/^HTTP\/\d\.\d\s+(301|302)/',$headers[0]))
       {
       foreach($headers as $value)
           {
           if(substr(strtolower($value), 0, 9) == "location:")
               {
               $furl = trim(substr($value, 9, strlen($value)));
               }
           }
       }
   // Set final URL
   $furl = ($furl) ? $furl : $url;
   print ("<br>");
   print $furl;
   print ("<br>");
   print ("<hr>");
}

print $foto;
}

?>


<body style="font-family:sans-serif; ">      
<div class="container">

  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
	  <li data-target="#myCarousel" data-slide-to="2"></li>
      
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
	
      <div class="item active">
        <img src="https://lh3.googleusercontent.com/p/AF1QipOVS775p06JHvInLMZRJSeLxLidPa_Qxk3PA8Hs=s1600-w400" alt="Piscina" style="width:100%;">
        <div class="carousel-caption">
          <h3>Piscina</h3>
          <p>Ven a divertirte</p>
        </div>
      </div>

      <div class="item">
	  <img src="https://lh3.googleusercontent.com/p/AF1QipPfB3-AxMfB6SXTt85HNF6UOKdieHoNpdAebp7X=s1600-w400" alt="montaña" style="width:100%;">
        <div class="carousel-caption">
          <h3>Vista a la montaña</h3>
          <p>Te esperamos ¡¡¡</p>
        </div>
      </div>
	  <div class="item">
	  <img src="https://lh3.googleusercontent.com/p/AF1QipMMrNiFGvIs3bxVG31T9UMeHv2syuURvWgFVMs-=s1600-w400" alt="montaña" style="width:100%;">
        <div class="carousel-caption">
          <h3>Entrada a la posada</h3>
          <p>Bievenido ¡¡¡</p>
        </div>
      </div>
    
      
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
         
</html>
