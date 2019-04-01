
<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

include('dbfunctions.php');

if (isset($_POST["productid"]))
{ 
  $productid = $_POST["productid"];
  echo "about to delete product " . $productid;
  if (deleteProduct($productid)) {
    ?>  
     <meta http-equiv="refresh" content="0; url=manageProducts.php" /> 
    <?php
  }
} 
  ?>