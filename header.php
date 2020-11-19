<?php
    session_start();
    require "includes/dbh.inc.php";
?>

<!doctype html>
<html>
<head>
	<link rel="icon" href="images/logo.jpg" type="images/jpg">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/css.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<meta name="viewport" content="width= device-width, initial-scale =1">
</head>
<body>
	<header>
	</header>
<nav class="navbar navbar-inverse">
	<div class="container-fluid">
    <div class="navbar-header">
        <a class="navbar-brad" href="Home.html"><img src="images/logo.jpg" alt="company logo" width="60px" height="50px"/></a>
    </div>
		<ul class="nav navbar-nav">
		<li><a href="index.php" >HOME</a></li>
		<li><a href="about.php" >ABOUT</a></li>
		<li><a href="training.php" >TRAINING</a></li>
		<li><a href="scan.php" >SCAN</a></li>
		<li><a href="email.php">EMAIL</a></li>
		<li><a href="overallreport.php">OVERAll REPORT</a></li>
		</ul>
		<ul class="nav navbar-nav navbar-right">
		<li><a href="signup.php" ><span class="glyphicon glyphicon-user"></span>SIGN UP</a></li>
		<li><a href="signin.php" ><span class="glyphicon glyphicon-login"></span>SIGN IN</a></li>
		</ul>
	</div>
</nav>
	<p class="login-status" style="text-align: center;"><span style="font-size:28px;"><span style="color:#800000;"><span class="e-report">E-REPORT</span> <span class="light">PHISH</span></span></span></p>

<section class="hero" id="hero">
<h2 class="tagline" style="font-style: italic; text-align: center;"><tt><big><span style="font-family:verdana,geneva,sans-serif;"><span style="font-size:12px;">Reporting phishing is as easy as fishing</span></span></big></tt></h2>
</section>
<br>
