<?php 
error_reporting(0);
include "session.php"; 

if ($_GET['action'] == "logout") {
session_start();
session_destroy();
header('location: http://localhost/rahmat/web/form_login.php?message=Username Atau Password yang diinput salah');
   }?>
<html>
<head>
    <title>Beranda</title>
    <?php include "header.php"; ?>

</head>
<body class="body-beranda">
<div id="logo">
	<a href="/">
		<img src="media/hamster.png">
        <span>Belajar Web Design</span>
    </a>
</div>	
<div id="container">
	<?php include "menu.php"; ?>
	<div class="main">
		<h1 class="content">WHAT IS ILLUMINATI??</h1>
		<p class="content">
			The Illuminati (plural of Latin illuminatus, "enlightened") is a name given to several groups, both real and fictitious. Historically, the name usually refers to the Bavarian Illuminati, an Enlightenment-era secret society founded on 1 May 1776. The society's goals were to oppose superstition, obscurantism, religious influence over public life, and abuses of state power. "The order of the day," they wrote in their general statutes, "is to put an end to the machinations of the purveyors of injustice, to control them without dominating them." The Illuminati—along with Freemasonry and other secret societies—were outlawed through edict by the Bavarian ruler Charles Theodore with the encouragement of the Catholic Church, in 1784, 1785, 1787, and 1790. In the several years following, the group was vilified by conservative and religious critics who claimed that they continued underground and were responsible for the French Revolution.
		</p>
	</div>
</div>
</body>
</html>