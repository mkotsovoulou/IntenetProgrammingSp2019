<?php
session_start();
include('header.php');
unset($_SESSION["username"]);
unset($_SESSION["is_admin"]);
session_destroy ();
?>
 <main role="main" style="
    margin: 50px;">

<h1>
  You are log-out!
</h1>
  <meta http-equiv="refresh" content="0; url=index.php" /> 
 </main>
<?php
include('footer.php');
?>
