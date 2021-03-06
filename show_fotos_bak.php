<?php
$id_neg = $_GET['id'];

?>
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
    
    /* Display rate count */    
    .reviewCount, .reviewScore {font-size: 12px; color: #666666; margin-left: 5px;}
    .reviewScore {font-weight: 600;}
    /* Display rate count Ends*/        
    </style>

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





<div class="container">
<h2>
<?php print $info["nomb_negocio"];?>
</h2>
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
      <img src='<?php print $url_pict;?>' alt="Piscina" style="width:100%;">
      <div class="carousel-caption">
        <h3><?php print $info["nomb_negocio"];?></h3>
        <p><?php print $info["direccion_negocio"];?> - <?php print $info["telef_negocio"];?></p>
      </div>
    </div>
    <?php for($i=1; $i<$longitud; $i++) { ?>
    <div class="item">
    <?php $url_pict=$fotos[$i]["url_foto"]; ?>
	  <img src='<?php print $url_pict;?>'  alt="montaña" style="width:100%;">
        <div class="carousel-caption">
          <h3><?php print $info["nomb_negocio"];?></h3>
          <p><?php print $info["direccion_negocio"];?> - <?php print $info["telef_negocio"];?></p>
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
<br>

<table>
  <tr>
<td>
<b>Dirección:&nbsp;</b>
    </td>
    <td>
<?php print $info["direccion_negocio"];?>
</td>
   
<tr>
<td>
<b>Telefono:</b></td>
    <td>
      <?php print $info["telef_negocio"];?>
      </td>
   
   <tr>
   <td>
   <b>Reseña:</b></td>
<td><?php print $info["desc_negocio"];?>
    </td>
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
<span class="reviewScore"><?php echo substr($info['valoracion'],0,3); ?></span>  <span class="reviewCount">(<?php echo $info['user_ratings_total']; ?> reviews)</span>
<?php }
?>
</td>
    </table>

    <br /><br />


</div> <!-- container -->

  
</html>
