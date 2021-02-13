<!DOCTYPE html>
<html lang="en">
<head>

<body style="font-family:sans-serif; ">      
<?php              
$url = "https://maps.googleapis.com/maps/api/place/details/json?place_id=ChIJN1t_tDeuEmsRUsoyG83frY4&fields=name,rating,formatted_phone_number&key=AIzaSyDG-R6WTvqjWqLb-01oG4LV7HV_az9Ajhw" ;

// $_GET['categoria'];
$data = file_get_contents($url);
$print ($data);
?>
</html>
