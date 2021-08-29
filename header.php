<?php  ob_start(); ?>
<!DOCTYPE html>
<html>
<head>
<title>Academic Education V2</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">
<!-- ################################################################################################ --> 
<!-- ################################################################################################ --> 
<br>
<!-- ################################################################################################ --> 
<!-- ################################################################################################ --> 
<!-- ################################################################################################ -->
<div class="wrapper row1">
  <header id="header" class="clear"> 
    <!-- ################################################################################################ -->
    <div id="logo" class="fl_left">
      <?php
      $logo = glob("dashboard/uploads/logo/*");
      foreach($logo as $k)
      {
        ?>
          <img src="<?php echo $k; ?>" style="width:150px">
        <?php
      }
      ?>
    </div>
    <!-- ################################################################################################ --> 
  </header>
</div>
<!-- ################################################################################################ --> 
<!-- ################################################################################################ --> 
<!-- ################################################################################################ -->
<div class="wrapper row2">
  <div class="rounded">
    <nav id="mainav" class="clear"> 
      <!-- ################################################################################################ -->
      <ul class="clear">
        <li class="active"><a href="index.php">Home</a></li>
        <li><a href="about.php">About Us</a></li>
        <li><a href="gallery.php">Gallery</a></li>
        <li><a href="online-fees.php">Online-Fees</a></li>
        <li><a href="student-registration.php">Student Registraction</a></li>
        <li><a href="login.php">Login</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li><a href="inquiry.php">Inquiry</a></li>
         
      </ul>
      <!-- ################################################################################################ --> 
    </nav>
  </div>
</div>
<div class="wrapper">
  <div id="slider">
    <div id="slide-wrapper" class="rounded clear"> 
      <!-- ################################################################################################ -->

      <?php

      $folder = glob("dashboard/uploads/*");
      foreach($folder as $k)
      {
      ?>
      <figure id="slide-1"><a class="view" href="#">
        <img src="<?php echo $k; ?>">
      
      </a>
       
      </figure>
      <?php
      }
      ?>
      <!-- ################################################################################################ -->
     
      <!-- ################################################################################################ --> 
    </div>
  </div>
</div>