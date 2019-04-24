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
    <?php include "menu.php"; ?>
	<div id="container">
		<p class="main">
			<h1><class="content">Multimedia</h1>
			<center>
				<h2>Gambar</h2>
				<img src="media/hitler.jpg">
				<h2>Audio</h2>
				<audio src="media/wildwest.mp3" controls></audio>

			<h2>Video</h2>
			<video width="320" height="240" controls>
				<source src="media/whereareunow.mp4" type="video/ogg">
			</video>
		            <h2>Youtube</h2>
		            <object width="420" height="315"
		            data="https://www.youtube.com/watch?v=1T1rDEyQZDY">

		            </object>
			</center>
			