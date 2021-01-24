<?php


$str_sql4="SELECT N.*, Round((( 3959 * acos( cos( radians('$lat') ) * cos( radians( N.lat ) ) * cos( radians( N.lon ) - radians('$lon') ) + sin( radians('$lat') ) * sin( radians( N.lat ) ) ) )*1.60934),1)  AS distance FROM t_negocios N JOIN tr_negocios_categorias R ON N.codi_negocio = R.codi_negocio WHERE R.id_categoria ='" .$categoria. "' AND Activo=1 Order By Distance ASC;";

include 'include/db_conect.inc';
$result2 = $conn->query($str_sql4);


?>