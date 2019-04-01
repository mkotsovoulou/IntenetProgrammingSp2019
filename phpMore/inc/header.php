<?php 
session_start(); ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <title>ITC4314 Demo</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Custom styles for this template -->
    <link href="\phpMore\css\sticky-footer.css" rel="stylesheet">
    <link href="\phpMore\css\carousel.css" rel="stylesheet">
</head>
<body>
        <header>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#">ITC4314</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contactus.php">Contact us</a>
            </li>
             <li class="nav-item">
             <?php if (isset($_SESSION["username"])) { ?>
               <a class="nav-link" href="logout.php">Logout</a>
              <?php }  else { ?> 
               <a class="nav-link" href="login.php">Login</a>
                <?php
                 } ?>
            </li>
            <li class="nav-item">
              <?php echo $_SESSION["username"]; 
                 if ($_SESSION["is_admin"] == 'Y') { ?>
                    <a class="nav-link" href="/phpMore/admin/admin.php">Admin Panel</a>
              <?php
                 }?>
              
            </li>
          </ul>
          <form class="form-inline mt-2 mt-md-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav>
    </header>