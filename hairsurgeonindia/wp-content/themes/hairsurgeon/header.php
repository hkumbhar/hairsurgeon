<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php the_title();?></title>

    <!-- Bootstrap -->
    <link href="<?php echo bloginfo('template_url'); ?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo bloginfo('template_url'); ?>/style.css" rel="stylesheet">
    <link href="<?php echo bloginfo('template_url'); ?>/style2.css" rel="stylesheet">
    <link href="<?php echo bloginfo('template_url'); ?>/demo.css" rel="stylesheet">
    <link href="<?php echo bloginfo('template_url'); ?>/fonts/font-awesome-4.2.0/css/font-awesome.min.css" rel="stylesheet">

  </head>
 
  <body>
<div class="container" style="margin-top: 10px;">
<div class="row">
  <div class="col-md-12">
    <div class="row" id="resonsive-header">
      <div class="col-sm-2">
      <!-- <img src="./img/logo.png"> -->
      <div class="nabar-brand"><img src="./img/logo.png" alt="Hair Transplants logo"></div>
      </div>
      <div class="col-sm-3" id="nav-header"><br><br>
      <i class="fa fa-phone" aria-hidden="true"></i><span class="font-a-phone">Call Us</span><span class="phone-number">:+ <?php the_field('header_cell_phone'); ?></span>
      </div>
      <div class="col-sm-3" id="nav-header2"><br><br>
      <i class="fa fa-envelope 2x"  aria-hidden="true"></i><span class="mail-text"> Email Us : </span><span class="mail-id"><?php the_field('header_email_id'); ?></span>
      </div><!-- end inner row -->
       <div class="col-sm-2" id="btn-traning"><br>
      <button type="button" id="btn-hover" class="btn btn-default tranning-btn">TRAINING</button>
      </div><!-- end inner row -->
       <div class="col-sm-2" id="btn-booknow"><br>
     <button type="button" class="btn btn-default book-now-btn" >BOOK NOW</button>

      </div><!-- end inner row -->
    </div>
  </div>
</div><!-- end outer row -->
</div><br>

<!-- NAVIGATION START-->
<nav class="navbar navbar-default nav-bar-sachmem col-md-12">
<div class="container-fluid">
<div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      
    </div>


<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
     <ul class="nav navbar-nav">
       <li ><a href="index.html" class="cmn-t-underline">HOME</a></li>
        <li ><a href="why hair transplant.html" class="cmn-t-underline">WHY HAIR SURGEON ?</a></li>
        <li ><a href="#" class="cmn-t-underline">ABOUT US</a></li>
        <li><a href="#" class="cmn-t-underline">FEATURES</a></li>
        
        <li><a href="#" class="cmn-t-underline">TREATMENTS</a></li>
        <li><a href="#" class="cmn-t-underline">GALLERY</a></li>
        <li><a href="#" class="cmn-t-underline">VIDEOS</a></li>
        <li><a href="connect.html" class="cmn-t-underline">CONNECT</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container -->
</nav>
<!-- NAVIGATION END-->
