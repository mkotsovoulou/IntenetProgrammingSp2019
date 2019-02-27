<?php 
$table = [
  ['Name'=>'Maira', 'Course'=>'ITC4314'],
        	['Name'=>'Nick', 'Course'=>'ITC3225'],
					['Name'=>'Chris', 'Course'=>'ITC1070']
];

echo "<table border='1' style='border-collapse: collapse;'>";
foreach($table as $row=> $assoc)
{
    echo "<tr> <td> $row </td>";
    foreach($assoc as $key => $value)
    {
        echo " <td> $value </td>";
    }
  echo "</tr>";
}
echo "</table>";
?>