<?php
define("INC_PATH",$_SERVER["DOCUMENT_ROOT"]."/phpMore/inc");
include(INC_PATH . '/header.php');
/*
 if ($_SESSION["is_admin"] != 'Y') { ?>
 <meta http-equiv="refresh" content="0; url=index.php" /> 
<?php } 
*/
?>
<style>
.clearfix::after {
  content: "";
  clear: both;
  display: block;
}</style>
   <main role="main" class="clearfix">
      <div class="container-fluid" style="margin-top: 20px">
   <a href="manageProducts.php">  Manage Products</a>
    <button>
     Manage Users
   </button>
</div>
</main>
<?php
include(INC_PATH . 'footer.php');
include(INC_PATH . 'endhtml.php');
?>