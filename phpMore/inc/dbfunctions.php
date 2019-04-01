<?php

$connect_file=$_SERVER["DOCUMENT_ROOT"]. "/phpMore/inc/connect.php";
include_once($connect_file);

function insertProduct($name, $img, $price) {
  $connect_file=$_SERVER["DOCUMENT_ROOT"]. "/phpMore/inc/connect.php";
  include($connect_file);
  try {
    $insert = $db->prepare("insert into products (name, img, price) values (?,?,?)");
    $insert->bindValue(1, $name);
    $insert->bindValue(2, $img);
    $insert->bindValue(3, $price);
    $insert->execute();
    return true;
  } catch (PDOException $e) {
    echo "Database product insert failure " . $e->getMessage();
    return false;
  }
}
function deleteProduct($id) {
    $connect_file=$_SERVER["DOCUMENT_ROOT"]. "/phpMore/inc/connect.php";
  include($connect_file);
  try {
    $insert = $db->prepare(" delete from products where id = ?");
    $insert->bindValue(1, $id);
   
    $insert->execute();
    return true;
  } catch (PDOException $e) {
    //echo "Database product delete failure " . $e->getMessage();
    return false;
  }
}
function updateProduct($id, $name, $price) {
  $connect_file=$_SERVER["DOCUMENT_ROOT"]. "/phpMore/inc/connect.php";
  include($connect_file);
  try {
    $insert = $db->prepare("update products set name = ?, price=? where id=?");
    $insert->bindValue(1, $name);
    $insert->bindValue(2, $price);
    $insert->bindValue(3, $id);
    $insert->execute();
    return true;
  } catch (PDOException $e) {
    echo "Database product update failure " . $e->getMessage();
    return false;
  }
}

function listAllProducts() {
 global $db;
	$results = $db->query("select * from products");
	$products = $results->fetchAll(PDO::FETCH_ASSOC);
  $table = '<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Price</th>
      <th scope="col">Image</th>
    </tr>
  </thead>
  <tbody>';
   echo $table;
   foreach($products as $key => $product) {
     $id = $product['id'];
     $name = $product['name'];
     $price = $product['price'];
     $img=  $product['img'];
     echo "<tr><th scope='row'>$id</th><td>$name</td><td>$price</td><td><img src='./$img' width='50px'/></td></tr>";
    }
    echo '</tbody></table>';
}


function adminListAllProducts() {
 global $db;
	$results = $db->query("select * from products");
	$products = $results->fetchAll(PDO::FETCH_ASSOC);
  $table = '<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Price</th>
      <th scope="col">Image</th>
      <th scope="col">Delete</th>
       <th scope="col">Update</th>
    </tr>
  </thead>
  <tbody>';
   echo $table;
   foreach($products as $key => $product) {
     $id = $product['id'];
     $name = $product['name'];
     $price = $product['price'];
     $img=  $product['img'];
     echo "<tr><th scope='row'>$id</th><td>$name</td><td>$price</td><td><img src='./$img' width='50px'/></td>
     <td><form id='delete' method='post' action='deleteProduct.php'><input type='hidden' id='productid' name='productid' value='$id'/><button type='submit' id='deleteBtn' name='deleteBtn'> Delete </button></form></td>";
     echo "<td><form id='update' method='post' action='javascript:copyFields();'><input type='hidden' id='productid' name='productid' value='$id'/>
     <input type='hidden' id='pname' name='pname' value='$name'/>
     <input type='hidden' id='pprice' name='price' value='$price'/><button type='submit' id='updateBtn' name='updateBtn'> Update </button></form></td></tr>";
    }
    echo '</tbody></table>';
}
?>