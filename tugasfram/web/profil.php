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
		<h1 class="content">Ini Biodata Ku</h1>
		<p class="content">
			<table>
				<tr>
					<img src="media/deadpool.png"alt="..." height="250"width="auto" align="left">
				</tr>
			   <tr>
				<td><strong>Nama Lengkap </strong></td>
				<td>:</td>
				<td>Rahmat W</td>
			   </tr>
			   <tr>
				<td><strong>Nama Panggilan </strong></td>
				<td>:</td>
				<td>Jay,Mat</td>
			   </tr>
			   <tr>
				<td><strong>Tempat,Tanggal Lahir </strong></td>
				<td>:</td>
				<td>Belawan,04 November 2001</td>
			   </tr>
			   <tr>
				<td><strong>Umur </strong></td>
				<td>:</td>
				<td>16 y.o</td>
			   </tr>
			   <tr>
				<td><strong>Jenis Kelamin </strong></td>
				<td>:</td>
				<td>Laki Laki</td>
			   </tr>
			   <tr>
				<td><strong>Gol.Darah </strong></td>
				<td>:</td>
				<td>B</td>
			   </tr>
			   <tr>
				<td><strong>Agama </strong></td>
				<td>:</td>
				<td>Islam</td>
			   </tr>
			   <tr>
				<td><strong>Alamat </strong></td>
				<td>:</td>
				<td>Komp.Citra Anugrah Permai Blok D no 6</td>
			   </tr>
			   <tr>
				<td><strong>Status </strong></td>
				<td>:</td>
				<td>Belum Menikah</td>
			   </tr>
			   <tr>
				<td><strong>Pekerjaan </strong></td>
				<td>:</td>
				<td>Pelajar</td>
			   </tr>
			   <tr>
				<td><strong>Kewarganegaraan </strong></td>
				<td>:</td>
				<td>Indonesia</td>
			   </tr>
			
		</p>
	</div>
</div>
</body>
</html>