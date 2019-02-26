<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Learn PHP</title>
</head>
<body>
	 <h1>
     Hello from html
  </h1>
  
  <?php
  echo $_SERVER['PHP_SELF'];
  $x=1;
  echo "isset:" . isset($x) . "<br>";
  $name="";
  echo "is empty:" . empty($name) . "<br>";
   var_dump($x);
  $x="maira";
  echo "<br>" . $x[1] . "<br>";
  echo "<h1>" . $x . "</h1>";
  echo "<h1> $x needs a brake </h1>";
  echo '<h1> $x needs a brake </h1>';

   var_dump($x);
  $x=3.4;
  echo $x + 2;
  
  var_dump($x);
  $x=TRUE;
  var_dump($x);
  echo gettype($x);
  
     echo '<h1>hello from php</h1>';
  ?>
  
  <ul>
    
  </ul>
</body>
</html>