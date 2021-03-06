<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
define("INC_PATH",$_SERVER["DOCUMENT_ROOT"]."/phpMore/inc");
include_once(INC_PATH . '/header.php');
include_once(INC_PATH . '/dbfunctions.php');
/*
 if ($_SESSION["is_admin"] != 'Y') { ?>
 <meta http-equiv="refresh" content="0; url=index.php" /> 
<?php } 
*/
?>
 <main role="main" style="margin: 50px;">
  <form method="post" action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>"  enctype="multipart/form-data">

     <input type="hidden" id="id" name="id" value=""/> <br>
         <label for="productName">Product Name</label>
     <input type="text" id="productName" name="productName"/> <br>
      <label for="price">Price</label>
     <input type="text" id="price" name="price"/> <br>
    
     <label for="imageFilename">Image </label>
    <input type="file" name="imageFilename" id="imageFilename"> <br>

    <input type="submit" id="insert" name="insert" value="Insert"/>
        <input type="submit" id="update" name="update" value="Update"/>
  </form>
  
</main>
<?php
/* if the form insert button was clicked then get the values from the POST and insert the product in the database... */
if (isset($_POST["insert"]))
{ 
  
$target_dir = "img/shirts";
$target_file = $target_dir . basename($_FILES["imageFilename"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
  
  $check = getimagesize($_FILES["imageFilename"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
  
  // Check if file already exists
if (file_exists($target_file)) {
    echo "File already exists... on the server";
}
// Check file size
if ($_FILES["imageFilename"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["imageFilename"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["imageFilename"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
  
  $productName = $_POST["productName"];
  $imageFilename = $target_file;
  $price = $_POST["price"];
  insertProduct($productName, $imageFilename, $price);
}
if (isset($_POST["update"]))
{ 
  $productName = $_POST["productName"];
  $price = $_POST["price"];
  $id = $_POST["id"];
  echo "ready to update";
  updateProduct($id, $productName, $price);
}
adminListAllProducts();
?>
<script>
   $('#update').hide();
	$('#updateBtn').on('click', function(){
  alert($(this).parent().get("#productid").val());
  });
  
  function copyFields() {
    $('#insert').hide();
    $('#update').show();
    $('#productName').closest().val($('#pname').val());
    $('#price').val($('#pprice').val());
    $('#id').val($('#productid').val());
  }
</script>
<?php
include(INC_PATH . '/footer.php');
include(INC_PATH . '/endhtml.php');
?>