<?php 
include("inc/header.php");
include("inc/productsDB.php");
?>
<h1>
  List of Products
</h1>

<?php
		foreach($products as $key => $product) {
      echo $key . " ". $product["name"]. ", " . $product["price"] . " Euros <br>";
      echo "<img src='" . $product["img"] . "' width='100px'/>";
    }



/*
foreach($products as $rowKey => $productInfo)
{
    foreach($productInfo as $key => $value)
    {   if ($key=="name")
        echo $value . '<br>';
    }
} */
?>
<?php 
include ("inc/footer.php"); 
include('inc/endhtml.php');
?>
