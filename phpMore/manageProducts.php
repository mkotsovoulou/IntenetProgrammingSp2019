<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

include('header.php');
include('dbfunctions.php');
/*
 if ($_SESSION["is_admin"] != 'Y') { ?>
 <meta http-equiv="refresh" content="0; url=index.php" /> 
<?php } 
*/
?>
 <main role="main" style="margin: 50px;">
  <form method="post" action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>">
     <label for="productName">Product Name</label>
     <input type="text" id="productName" name="productName"/> <br>
     <label for="imageFilename">Image Filename</label>
     <input type="text" id="imageFilename" name="imageFilename"/> <br>
     <label for="price">Price</label>
     <input type="text" id="price" name="price"/> <br>
    
    <input type="submit" name="insert" value="Insert"/>
  </form>
  
</main>
<?php
/* if the form insert button was clicked then get the values from the POST and insert the product in the database... */
if (isset($_POST["insert"]))
{ 
  $productName = $_POST["productName"];
  $imageFilename = $_POST["imageFilename"];
  $price = $_POST["price"];
  insertProduct($productName, $imageFilename, $price);
}

listAllProducts();
include('footer.php');
?>