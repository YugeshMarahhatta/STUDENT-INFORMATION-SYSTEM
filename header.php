<?php
    session_start();
    if($_SESSION["user"]!="admin")
    {
        ?>
            <script>
                alert("You must login to access this page.");
                window.location="../loginadmin.php";
                </script>
        <?php
    }
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Student Information System</title>

  <!-- Template Main CSS File -->
  <link href="style.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
  <div class="container d-flex align-items-center">

    <h1 class="logo me-auto"><a href="home.php"><img src="../logo.png"></a>Student Information System</h1>
      <!-- <img src="logo.png>"<a href="index.html">S</a></h1> -->

    <nav id="navbar" class="navbar order-last order-lg-0">
      <ul>
        <li><a href="dashbord.php">Dashbord</a></li>
        <li><a href="#">Attendence</a></li>
        <li><a href="#">Account</a></li>
        <li class="dropdown"><a href="#"><span>Students</span> 
              <ul>
                <li><a href="allstudent.php">All Student</a></li>
                <li><a href="addstudent.php">Add Students</a></li>
              </ul>
              </a>
        </li>
        <li><a href="notice.php">Notice</a></li>
        <li><a href="../home.php">Log Out</a></li> 
        <div class="searchbox">
        <input type="text" placeholder="Search...." name="search2" class="search" action="home.html">
                <button type="submit" class="button"><i class="fa fa-search"></i></button>
        </div>
        
      </ul>

  </div>
</header><!-- End Header -->
<!-- <div class="logout"><a href="../home.php"> <img src="logout.png" name="logout" class="logout" style="height:10%; width:10%"></div> -->
  </body>
  </html>
