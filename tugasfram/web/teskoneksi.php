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
</div id="container">
    <?php include "menu.php"; ?>

   <div>
   	<h1 class="content">Tes Koneksi Database</h1>
   	<p class="content">
   		<?php
   		$servername = "localhost";
   		$username = "root";
   		$password = "";

   		//create connection
   		$conn = new mysqli($servername, $username, $password);

   		//check connection
   		if ($conn->connect_error) {
   			die("Koneksi gagal dengan pesan : ".
   				$conn->connect_error);
   		}
   		echo "Koneksi ke database berhasil";
   		?>
   </center></p>	