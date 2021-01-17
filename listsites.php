<?php 
$categoria = $_GET['categoria'];
$str_sql="SELECT N.nomb_negocio,N.codi_negocio , N.desc_negocio ,N.valoracion ,N.telef_negocio ,N.imagen_negocio ,N.direccion_negocio,N.coord_negocio, N.coord2, N.webpage FROM t_negocios N JOIN tr_negocios_categorias R ON N.codi_negocio = R.codi_negocio WHERE R.id_categoria ='" .$categoria. "';";
?>

<?php include 'include/db_conect.inc';?>


<?php
$result = $conn->query($str_sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <?php include 'include/head.inc';?>
   <link rel="stylesheet" href="css/mis_estilos.css">
   
   
   
   
   
   
</head>

<body>
<div class="container-fluid" >

<!--membrete general-->
<?php include 'include/membrete.inc';?>

	<div class="container-fluid" style="background-color:#fafafa;">
		<br><br>
		<div class="row gutter-10" >
			
				<div class="container-fluid" border=1 >
					<div class="panel-group"   >
						<?php
    					while($row = $result->fetch_assoc()) {
							
									$max = "5"; // Numero total de imagenes
$extension2 = ".png";// Definimos la extension, puede ser .jpg, gif, bmp, etc.
$carpeta2 = "imagenes/apps/estrellas";//Carpeta con las imagenes
$start = "2";
$random = mt_rand($start, $max);
$image_name2 = $carpeta2  . $random . $extension2;
$image_name2= "img src='" . $image_name2 . "'  width=52,height=28 id='imagen' class='imagen'/> ";
$image_name3= "img src='" . $image_name2 . "'  width=25,height=25 id='imagen' class='imagen'/> ";



						?>
						<div class="panel panel-default"  >
							<div class="panel-body ">
							
								<table border=0 width="100%">
									<tr>
									<td  valign="top" width="40" align="center">
								
									<?php
									$foto = "img src='images/sites/" . $row['imagen_negocio'] . "' width='60' height='60' class='img-rounded' onclick='javascript:alert(" . $row['codi_negocio'] . ");'  class='img-responsive'/> ";
									print "<" . $foto;
									?>
									</p>
									<?php
									
print "<" . $image_name2;

?> 
									
									</td>
									<td rowspan=2 width=10>&nbsp;&nbsp;&nbsp;</td>
									<td class="align-top" >
									<h5><font color="#086A87"><span id="titulo"> <?php print $row['nomb_negocio']; ?></span></h5></font>
									<font face="helvetica" color="black">
									<?php $rank = $row['valoracion']; ?>
									<div id="ocu_mayor_igual_800">
										<?php print Substr($row['desc_negocio'], 0,50) . "..."; ?>
									</div>
									<!-- <div id="ocu_menor_igual_800"> -->
										<?php print $row['desc_negocio']; ?>
									<!--</div>-->
									</font><p><a href="<?php print $row['webpage']; ?>" target="blank" >
			<?php print $row['webpage']; ?></a><p>
									
									<span class="glyphicon">&#xe182;</span>
									<?php print $row['telef_negocio']; ?>
									<br>
									</font>
									<div>
										<font face="helvetica"><small><b>Dir:&nbsp;</u></b>	<?php print $row['direccion_negocio']; ?></font></small>
									</div>
									<div id="ocu_mayor_igual_800">
										<?php print Substr($row['direccion_negocio'], 0,50) . "..."; ?>
									</div>
									
									
	<font face="helvetica"><small>
									<?php
									//$coord = $row['coord_negocio'];
									//$tira= "<a href=https://maps.google.co.ve/maps?q=" .$coord . " onclick=" . "\"window.open(this.href, 'mywin', 'left=20,top=20,width=900,height=500,toolbar=1,resizable=0'); return false;" . "\" >Ver mapa</a>";
									$coord = $row['coord2'];
									$tira= "<a href=https://www.google.co.ve/maps/place/" .$coord . " onclick=" . "\"window.open(this.href, 'mywin', 'left=20,top=20,width=900,height=500,toolbar=1,resizable=0'); return false;" . "\" >Ver mapa</a>";
									echo $tira;
									?>
									</small></font>
									
									</td>
									
									</tr>
									
								</table>
								
									
									
							</div>
						</div>
							<?php
							}
							$conn->close();
							?>
					</div>
				</div>
			</div>
		</div>
	</div>

<!--pie de pagina-->
<?php include 'include/footer.inc';?> 

</div>
</body>
</html>
