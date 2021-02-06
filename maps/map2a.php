<?php
//$var_sql = $_POST['var_sql'];
$categoria = $_POST['categoria'];
//$categoria  = "c003";
$lat = -34.5737177;
$lon = -58.4354472;

$var_sql="SELECT N.*, Round((( 3959 * acos( cos( radians('$lat') ) * cos( radians( N.lat ) ) * cos( radians( N.lon ) - radians('$lon') ) + sin( radians('$lat') ) * sin( radians( N.lat ) ) ) )*1.60934),1)  AS distance FROM t_negocios N JOIN tr_negocios_categorias R ON N.codi_negocio = R.codi_negocio WHERE R.id_categoria ='" .$categoria. "' AND Activo=1 Order By Distance ASC;";

?>
<?php 
//print("sql: ");
//print($var_sql) ?>
<!DOCTYPE html >
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <title>Buenos Aires Top</title>

    <!-- Bootstrap -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<!-- Bootstrap --> 
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
	
	
   
  </head>

<html>
  <body>
  

  <div id="map" class="col-xs-12 col-sm-12 col-md-10 col-lg-10" ></div>
<div id="list" class="col-xs-12 col-sm-12 col-md-2 col-lg-2" >
  <?php
 
$url = "https://serviciomadriz.online/buenosairestop/get_sites.php?categoria=" . $_POST['categoria'];
$data = file_get_contents($url);
$products = json_decode($data,true);
$longitud = count($products);

//while($row = $products->fetch_assoc()) {
  //foreach ($products as $row) {
for($i=0; $i<$longitud; $i++) {
  
  $row = $products[$i];
  print "&nbsp;";
  print $i+1;
  print "&nbsp;&nbsp;";
  print $row['nomb_negocio'];
  print "<hr>";
}

  ?>
 </div>
   
    <script>
	
	
	
	
      var customLabel = {
        restaurant: {
          label: 'R'
        },
        bar: {
          label: 'B'
        }
      };

        function initMap() {
			//xlat = geoplugin_latitude();
		//	alert (xlat);
        var map = new google.maps.Map(document.getElementById('map'), {
          center: new google.maps.LatLng(-34.5739088, -58.4429909),
          zoom: 13
        });
		infoWindow = new google.maps.InfoWindow;
		
		
		var iconBase = 'https://maps.google.com/mapfiles/kml/shapes/';
var icons = {
  parking: {
    icon: iconBase + 'parking_lot_maps.png'
  },
  library: {
    icon: iconBase + 'library_maps.png'
  },
  info: {
    icon: iconBase + 'info-i_maps.png'
  }
};
		

        // Try HTML5 geolocation.
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var pos = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };

            infoWindow.setPosition(pos);
            infoWindow.setContent('Usted está aquí.');
            infoWindow.open(map);
            map.setCenter(pos);
          }, function() {
            handleLocationError(true, infoWindow, map.getCenter());
          });
        } else {
          // Browser doesn't support Geolocation
          handleLocationError(false, infoWindow, map.getCenter());
        }
		
        var infoWindow = new google.maps.InfoWindow;

          // Change this depending on the name of your PHP or XML file
		    // downloadUrl('https://storage.googleapis.com/mapsdevsite/json/mapmarkers2.xml', function(data) {
			//downloadUrl("map2c.php?var_sql=<?php print($var_sql); ?>", function(data) {
        downloadUrl("map2c.php?categoria=<?php print($categoria); ?>", function(data) {
			var xml = data.responseXML;
			//alert(xml);
            var markers = xml.documentElement.getElementsByTagName('marker');
			var cont = 0;
            Array.prototype.forEach.call(markers, function(markerElem) {
			  cont = cont +1;
              var id = markerElem.getAttribute('id');
              var name = markerElem.getAttribute('name');
              var address = markerElem.getAttribute('address');
              var type = markerElem.getAttribute('type');
              var point = new google.maps.LatLng(
                  parseFloat(markerElem.getAttribute('lat')),
                  parseFloat(markerElem.getAttribute('lng')));

              var infowincontent = document.createElement('div');
              var strong = document.createElement('strong');
              strong.textContent = name
              infowincontent.appendChild(strong);
              infowincontent.appendChild(document.createElement('br'));
			  
			 

              var text = document.createElement('text');
              text.textContent = address
              infowincontent.appendChild(text);
              var icon = customLabel[type] || {};
			  var icon = cont;
              var marker = new google.maps.Marker({
                map: map,
                position: point,
				 //icon: icons['parking'].icon,
                //label: icon.label
				label: String(icon)
              });
              marker.addListener('click', function() {
                infoWindow.setContent(infowincontent);
                infoWindow.open(map, marker);
              });
            });
          });
        }



      function downloadUrl(url, callback) {
        var request = window.ActiveXObject ?
            new ActiveXObject('Microsoft.XMLHTTP') :
            new XMLHttpRequest;

        request.onreadystatechange = function() {
          if (request.readyState == 4) {
            request.onreadystatechange = doNothing;
            callback(request, request.status);
          }
        };

        request.open('GET', url, true);
        request.send(null);
      }
	  
	  function objectToXml(obj) {
        var xml = '';

        for (var prop in obj) {
            if (!obj.hasOwnProperty(prop)) {
                continue;
            }

            if (obj[prop] == undefined)
                continue;

            xml += "<" + prop + ">";
            if (typeof obj[prop] == "object")
                xml += objectToXml(new Object(obj[prop]));
            else
                xml += obj[prop];

            xml += "<!--" + prop + "-->";
        }

        return xml;
    }

      function doNothing() {}
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDG-R6WTvqjWqLb-01oG4LV7HV_az9Ajhw&callback=initMap">
    </script>
	
	
	

  </body>
</html>