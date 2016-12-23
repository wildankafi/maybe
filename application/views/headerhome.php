<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Maybe</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Clinico Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
    function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="<?php echo base_url('web/css/bootstrap.css')?>" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo base_url('web/css/style.css')?>" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script src="<?php echo base_url('web/js/jquery-1.11.1.min.js')?>"></script>
<!-- //js -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="<?php echo base_url('web/js/move-top.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('web/js/easing.js')?>"></script>
<script type="text/javascript">
  jQuery(document).ready(function($) {
    $(".scroll").click(function(event){   
      event.preventDefault();
      $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
    });
  });
</script>
<!-- start-smoth-scrolling -->
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Cinzel:400,700,900' rel='stylesheet' type='text/css'>
</head>
  
<body>
<!-- header -->
  <div class="header">
    <div class="container">
      <nav class="navbar navbar-default">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          </button>
          <div class="logo">
              <img src="<?php echo base_url('web/images/nelogo.png')?>" alt=""></a><span>Mom and Baby Care</span></h1>
          </div>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
          <nav class="cl-effect-5" id="cl-effect-5">
            <ul class="nav navbar-nav">
              <li><a href="<?php echo site_url('Home')?>" class="active">HOME</a></li>
              <li><a href="<?php echo site_url('Tips/tips_ibu')?>"><span data-hover="TIPS IBU">TIPS IBU</span></a></li>
              <li><a href="<?php echo site_url('Tips/tips_bayi')?>"><span data-hover="TIPS BAYI">TIPS BAYI</span></a></li>
              <li><a href="<?php echo site_url('Gejala')?>"><span data-hover="INFO GEJALA">INFO GEJALA</span></a></li>
              <li><a href="<?php echo site_url('Login')?>"><span data-hover="LOGIN">LOGIN</span></a></li>
            </ul>
          </nav>
        </div>
        <!-- /.navbar-collapse -->
      </nav>
    </div>
  </div>
<!-- header -->