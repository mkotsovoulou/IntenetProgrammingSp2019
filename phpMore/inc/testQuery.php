<?php
include("connect.php");
$results = $db->query("select * from products");
$products = $results->fetchAll(PDO::FETCH_ASSOC);

foreach($products as $key => $product) {
      echo $product["id"]    . " " .
           $product["name"]  . ", " .
           $product["price"] . " Euros <br>";
    echo "<img src='../" . $product["img"] . "' width='100px'/>";
}