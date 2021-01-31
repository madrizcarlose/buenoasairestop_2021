<?php
$data = file_get_contents("http://localhost/buenosairestop/get_sites.php");
$products = json_decode($data, true);
 
foreach ($products as $product) {
    echo '<pre>';
    print_r($product);
    echo '</pre>';
}
?>