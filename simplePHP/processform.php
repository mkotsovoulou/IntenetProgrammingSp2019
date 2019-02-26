<?php
if (isset($_GET["submit"]))
{
$username = $_GET["username"];
$password = $_GET["password"];
$email = $_GET["email"];

echo "data submitted from the form: $username, $password, $email";
}
else 
  echo "no data were submitted";
?>