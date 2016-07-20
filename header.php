<?php
include "config/koneksi.php";
?>
<!doctype html>
<!-- Conditional comment untuk mobile ie7 http://blogs.msdn.com/b/iemobile/ -->
<!--[if IEMobile 7 ]>    <html class="no-js iem7" manifest="default.appcache?v=1"> <![endif]-->
<!--[if (gt IEMobile 7)|!(IEMobile)]><!--> 
<html class="no-js" manifest="default.appcache?v=1"> <!--<![endif]-->

<head>
  <meta charset="utf-8">
  <title>SIGI Tourism</title>
  <meta name="HandheldFriendly" content="True">
  <meta name="MobileOptimized" content="320"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no"> 
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/sigi.png">
  <!-- For first-generation iPad: -->
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/sigi.png">
  <!-- For non-Retina iPhone, iPod Touch, and Android 2.1+ devices: -->
  <link rel="apple-touch-icon-precomposed" href="img/sigi.png">
  <!-- For nokia devices: -->
  <link rel="shortcut icon" href="img/sigi.png">
   
  <!-- Mobile IE allows us to activate ClearType technology for smoothing fonts for easy reading -->
  <meta http-equiv="cleartype" content="on">
	
  <!-- JQMobile Stylesheet -->
  <link rel="stylesheet" href="css/jquery.mobile-1.3.1.css" />
  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="css/style.css">
  
  <!-- All JavaScript at the bottom, except for Modernizr which enables HTML5 elements & feature detects -->
  <script src="js/libs/modernizr-custom.js"></script>
  
  <!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if necessary -->
 
  <script>window.jQuery || document.write("<script src='js/libs/jquery-1.6.2.min.js'>\x3C/script>")</script>
	  
  <script src="js/jquery.mobile-1.3.1.min.js"></script>    
  
</head>
<body>
<div data-role="page" data-theme="a">    
<header data-role="header" class="customHeader">
<h1>SIGI Tourism</h1>

<nav data-role="navbar">
<ul>
<li><a  rel="external" href="beranda.html" data-transition="fade">BERANDA</a></li>
<li><a  rel="external" href="agendawisata.html" data-transition="fade">AGENDA</a></li>
<li><a  rel="external" href="pelayanan.html" data-transition="fade">PELAYANAN</a></li>
</ul>
</nav>
</header><!-- /header -->