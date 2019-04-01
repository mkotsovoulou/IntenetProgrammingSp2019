<?php
echo json_encode(array('success' => 0));
$connect_file=$_SERVER["DOCUMENT_ROOT"]. "/phpMore/inc/connect.php";
echo $connect_file;
include($connect_file);
if (isset($_POST['username']) && $_POST['username'] && isset($_POST['password']) && $_POST['password']) {
try {
  $results = $db->prepare("select * from pusers where email=? and password=?");
  $results->bindParam(1, $username);
  $results->bindParam(2, $password);
  $results->execute();
	if ($results->rowCount() == 0)
   echo json_encode(array('success' => 0));
  else {
    $userdata = $results->fetch();
    $_SESSION["is_admin"] = $userdata["is_admin"];
    $_SESSION["username"] = $username;
    echo json_encode(array('success' => 1));
  }
} catch (Exception $e) {
   echo json_encode(array('success' => 0));
   exit;
}
}
?>
   
