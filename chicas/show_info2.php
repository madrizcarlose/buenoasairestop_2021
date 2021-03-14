<?php
$id_neg = $_GET['id'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="../images/app/utils/ico.png">
<!-- Bootstrap -->

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<!-- Bootstrap --> 


  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>

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
        background: url(../images/app/stars/stars.png) no-repeat;
        background-size: cover;
        position: absolute;
    }
    .rate-bg{
        height: 22px;
        background-color: #ffbe10;
        position: absolute;
    }
    /* Rate Star Ends*/
    
    /* Display rate count */    
    .reviewCount, .reviewScore {font-size: 12px; color: #666666; margin-left: 5px;}
    .reviewScore {font-weight: 600;}
    /* Display rate count Ends*/   
    
    
    .container.custom-container {
      padding: 0 20px;
    }
  
    </style>
<title>Lo mejor de Buenos Aires</title>
</head>
<?php

$parametros = "id_neg=".$id_neg;
$url = "http://ec2-3-138-102-101.us-east-2.compute.amazonaws.com/get_info_negocio.php?".$parametros;
$data = file_get_contents($url);
$info = json_decode($data,true);
$info = $info[0];


$url = "http://ec2-3-138-102-101.us-east-2.compute.amazonaws.com/get_fotos.php?".$parametros;


//print $url;
// $_GET['categoria'];
$data = file_get_contents($url);
$fotos = json_decode($data,true);
$longitud = count($fotos);

?>

<body style="font-family:sans-serif; ">      
<!-- ENCABEZADO-->
<div class="custom-container container">
	<div class="template">
		<div class="row">
			<div class="col-sm-4 col-md-4 col-lg-4" align="left"> 
			<a href="index.php"><img src="../images/app/utils/logo_BA.png"  alt="" longdesc="" id="img_logo"  height="62" width="130">
			</a>
			</div>
			<div class="col-sm-8 col-md-8 col-lg-8" valign="center" align="center"> 
				<!--<p class="h1"  align="left">Guía de Buenos Aires</p>--> 
				<h2 align="left">Top Buenos Aires</h2>
			</div>
		</div> <!--row-->
	</div> <!--template-->
</div> <!--container-->
<!-- FIN DEL ENCABEZADO -->


<div class="custom-container container">
	<div class="template">
		<div class="row">

<!-- <div class="container"> -->
<div class="col-sm-12 col-md-12 col-lg-12" align="left"> 
<h2>
<?php print $info["nomb_negocio"];?>
</h2>
  </div>

  <div class="col-sm-12 col-md-12 col-lg-8" align="left"> 
  <div id="myCarousel2" class="carousel slide" data-ride="carousel">
<!-- Indicators -->
<ol class="carousel-indicators">
   <li data-target="#myCarousel2" data-slide-to="0" class="active"></li>
<?php
//while($row = $products->fetch_assoc()) {
  //foreach ($products as $row) {
for($i=1; $i<$longitud; $i++) {
  if (1==1) {
  $row=$fotos[$i];
  ?>
 <li data-target="#myCarousel2" data-slide-to="<?php print $i;?>"></li>

<?php
}
}

//$url_pict= $fotos[0]["url_foto"];
?>
</ol>
<!-- Wrapper for slides -->
<div class="carousel-inner">
	
    <div class="item active">
        <?php $url_pict=$fotos[0]["url_foto"]; ?>
      <img src='<?php print $url_pict;?>'  style="width:100%;">
      <div class="carousel-caption">
        <h3><?php print $info["nomb_negocio"];?></h3>
        <p><?php print $info["whatsapp"];?>
      
      </p>
      </div>
    </div>
    <?php for($i=1; $i<$longitud; $i++) { ?>
    <div class="item">
    <?php $url_pict=$fotos[$i]["url_foto"]; ?>
	  <img src='<?php print $url_pict;?>'   style="width:100%;">
        <div class="carousel-caption">
          <h3><?php print $info["nomb_negocio"];?></h3>
          <p><?php print $info["whatsapp"];?></p>
        </div>
      </div>
      <?php } ?>
</div>

 <!-- Left and right controls -->
 <a class="left carousel-control" href="#myCarousel2" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel2" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>

</div> <!-- mycarrousel -->
    </div>
<br>
<div class="col-sm-12 col-md-12 col-lg-4" align="left"> 
<table>
<tr>
  <td><b>Zona:&nbsp;</b></td>
    <td><?php print $info['zona'];?></td>
</tr>
<tr>
  <td><b>Edad:&nbsp;</b></td>
    <td><?php print $info['edad'];?></td>
</tr>
<tr>
  <td><b>Altura:&nbsp;</b></td>
    <td>1.65</td>
</tr>
<tr>
  <td><b>Medidas:&nbsp;</b></td>
    <td>92-60-92</td>
</tr>

<tr>
<td>
<b>Horario:&nbsp;</b>
    </td>
    <td>
    Full Time
</td>
</tr>
   

 <tr>  
   
      <td><b>Valoración:&nbsp;&nbsp;&nbsp;</b></td>
      <td>
<?php if ($info['valoracion']>0){

$rate_bg = round(($info['valoracion']/5),2)*100;
?>
<div style="margin-top: 10px">
<div class="result-container">
<div class="rate-bg" style="width:<?php echo $rate_bg; ?>%"></div>
<div class="rate-stars"></div>
</div>                    
<span class="reviewScore"><?php echo substr($info['valoracion'],0,3); ?></span>
<span class="reviewCount">(<?php echo $info['user_ratings_total']; ?> reviews)</span>
<?php }
?>
</td>
</tr>
<tr>
<td colspan=2>

<h4>
     
      
      <?php 
            if ($info['whatsapp'] != NULL) {
              ?>
              <a href="https://api.whatsapp.com/send?phone=<?php print $info['whatsapp'];?>&text=Hola, los ubiqué en *https://topbuenosaires.online*." target="blank" >
              <img src="../images/app/utils/whatsapp_ico.png"  height="22" width="22">
				      </a>
            <?php  } ?> 
            <?php print $info["whatsapp"];?>
            </h4>
      </td>
      </tr> 

    </table>
</div>

    <br /><br />


</div> <!-- container -->
</div></div>
  
</html>
