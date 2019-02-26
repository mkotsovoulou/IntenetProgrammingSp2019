<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);

$tasks = [
'Go to the store',
'Go to the market',
'Go to work'
]
?>
<ul>
<?php
 foreach ($tasks as $task) { ?>

<li> <?= $task; ?> </li> 
  <!-- short for <?php echo $task ?> -->

<?php } ?>
</ul>

