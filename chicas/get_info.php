<?php
//$categoria = "c003";


//$lon = -58.4354472;

if( isset($_GET['group']) )
{
    $agrupar = $_GET['group'];
   // echo $agrupar;
    if ($agrupar == 'categoria')  {
        
        $str_sql4="SELECT DISTINCT N.suscripcion as Grupo FROM t_negocios N JOIN tr_negocios_categorias R ON N.codi_negocio = R.codi_negocio WHERE R.id_categoria ='x001' AND N.Activo=1 AND N.suscripcion IS NOT NULL;";
        $str_sql5="SELECT N.nomb_negocio, N.codi_negocio, N.imagen_negocio, N.edad, N.zona, N.suscripcion FROM t_negocios N JOIN tr_negocios_categorias R ON N.codi_negocio = R.codi_negocio WHERE R.id_categoria ='x001' AND N.Activo=1 and N.suscripcion='";
    }
    else{
        $str_sql4="SELECT DISTINCT N.zona as Grupo FROM t_negocios N JOIN tr_negocios_categorias R ON N.codi_negocio = R.codi_negocio WHERE R.id_categoria ='x001' AND N.Activo=1 AND N.zona IS NOT NULL;";
        $str_sql5="SELECT N.nomb_negocio, N.codi_negocio, N.imagen_negocio, N.edad, N.zona, N.suscripcion FROM t_negocios N JOIN tr_negocios_categorias R ON N.codi_negocio = R.codi_negocio WHERE R.id_categoria ='x001' AND N.Activo=1 and N.zona='";
    }

   
}

if( isset($_GET['categoria']) )
{
    $str_sql4="SELECT DISTINCT N.suscripcion as Grupo FROM t_negocios N JOIN tr_negocios_categorias R ON N.codi_negocio = R.codi_negocio WHERE R.id_categoria ='x001' AND N.Activo=1 AND N.suscripcion='".$_GET['categoria']."';";
    $str_sql5="SELECT N.nomb_negocio, N.codi_negocio, N.imagen_negocio, N.edad, N.zona, N.suscripcion FROM t_negocios N JOIN tr_negocios_categorias R ON N.codi_negocio = R.codi_negocio WHERE R.id_categoria ='x001' AND N.Activo=1 and N.suscripcion='";
}

if( isset($_GET['zona']) )
{
    $str_sql4="SELECT DISTINCT N.zona as Grupo FROM t_negocios N JOIN tr_negocios_categorias R ON N.codi_negocio = R.codi_negocio WHERE R.id_categoria ='x001' AND N.Activo=1 AND N.zona='".$_GET['zona']."';";
    $str_sql5="SELECT N.nomb_negocio, N.codi_negocio, N.imagen_negocio, N.edad, N.zona, N.suscripcion FROM t_negocios N JOIN tr_negocios_categorias R ON N.codi_negocio = R.codi_negocio WHERE R.id_categoria ='x001' AND N.Activo=1 and N.zona='";
}


//echo $str_sql4;

include '../include/db_conect.inc';
//print $server;
$result2 = $conn->query($str_sql4);

$rawdata = array(); //creamos un array


    //guardamos en un array multidimensional todos los datos de la consulta
    $i=0;

    while($row = mysqli_fetch_array($result2))
    {
        $rawdata[$i][0] = $row;
        $str_sql6=$str_sql5. $row[0]. "';";
        //echo $str_sql6;
        //echo "<br>";
        $result5 = $conn->query($str_sql6);
        $rawdata5 = array(); //creamos un array
        $i5=0;
        while($row5 = mysqli_fetch_array($result5))
        {
            
            //echo $row5[0];
            $rawdata5[$i5] = $row5;
             $i5++;
        }
        $rawdata[$i][1] = $rawdata5;
        
        $i++;
    }
  
   header('Content-type: application/json');
   echo json_encode($rawdata);
  //var_dump(json_encode($rawdata));


//$json_string = json_encode($rawdata);
//$file = 'clientes.json';
//file_put_contents($file, $json_string);

require "../include/db_conect_close.inc";
?>