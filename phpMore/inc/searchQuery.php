<?php
/* sample execution: searchQuery.php?id=101&price=10 */
ini_set('display_errors', 1);
error_reporting(E_ALL);
if (isset($_GET["id"]) & isset($_GET["price"])) {
 $pid=$_GET["id"];
 $price=$_GET["price"];

include("connect.php");
try {
  $results = $db->prepare("select * from products where id = ? and price > ?");
  $results->bindParam(1, $pid);
  $results->bindParam(2, $price);
  $results->execute();
	$products = $results->fetchAll(PDO::FETCH_ASSOC);
} catch (Exception $e) {
   echo "Data could not be retrieved from the database.";
   exit;
}
echo "ok";
foreach($products as $key => $product) {
  echo $product["id"]. " " . $product["name"];
}
} else 
  echo "no search query provided.";
