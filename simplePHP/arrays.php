<?php 
ini_set('display_errors', 1);
$title="Welcome";?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title><?php echo $title; ?></title>
</head>
<body>
    <?php echo "<h1> $title </h1"; ?>

  
  <?php 
  $names=array("chris", "nick", "maira", "helen", "john", 50);
  var_dump($names);
  echo "<br>";
  $grades=array(80, 50.5, 45.2, 87 , 42);
  var_dump($grades);
  echo "<br>";
  for ($i=0; $i<count($names); $i++){
    echo $names[$i] . "<br>";
  }
  
  //associative arrays
  
  $data = array ('year' => 2019,
                'Course' => "ITC4314",
                "Instructor" => "MK",
                "Credits" => 3);
   echo "<br>"; 
   
  foreach ($data as $key=>$value) {
    echo $key . " "  . $value . "<br>";
  }
  
 $order = ['chips' => 3,
          'drinks' => 0,
          'salads' => 2,
          'pizza' => 1,
          'burgers'=> 5];
 
  foreach ($order as $key=>$value) {
     if ($value>0) {
        echo $value . " "  . $key . "<br>";
     }
  }


  ?>
</body>
</html>