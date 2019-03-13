<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Login</title>
</head>
<body>
	<h1>
     Login
  </h1>
  
  <form method="POST" action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>">
    <label for="username">Username</label>
    <input type="text" id="username" name="username"/> <br>
    <label for="password">Password</label>
     <input type="password" id="password" name="password"/> <br>
    <input type="submit" name="login" value="login"/>
  </form>


<?php

if (isset($_POST["login"]))
{ 
  
$connect_file=$_SERVER["DOCUMENT_ROOT"]. "/phpMore/inc/connect.php";
include($connect_file);

$username = $_POST["username"];
$password = $_POST["password"];
  
try {
  $results = $db->prepare("select * from pusers where email=? and password=?");
  $results->bindParam(1, $username);
  $results->bindParam(2, $password);
  $results->execute();
	if ($results->rowCount() == 0)
    $message = "Wrong username or password";
  else $message ="Welcome " .$username;
} catch (Exception $e) {
   echo "Data could not be retrieved from the database." . $e;
   exit;
}
  
}

?>
  
    <div id="message"> <?php echo $message ?>
  </div>
</body>
</html>