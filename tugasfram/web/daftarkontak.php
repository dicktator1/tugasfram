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
			<h1><class="content">Daftar Kontak</h1>
			<table border="1">
				<tr>
					<td>No</td>
					<td>Nama</td>
					<td>Email</td>
					<td>Pertanyaan</td>
					<td>Aksi</td>
				</tr>
				<?php
				include "config.php";
				$sql = "SELECT * FROM kontak";
				$result = $conn->query($sql);
				if($result->num_rows>0){
				$i=0;
				while($row=$result->fetch_assoc())
				?>
				<form method="post"
				action="kontak_proses_edit.php?id=
					<?php echo $_GET['id'];?>">
					<table>
						<tr>
							<td><b>Nama</b></td>
							<td>:</td>
							<td>
								<input type="text"
								value="<?php echo $row['nama']; ?>"
								name="nama" required>"
						</td>
					</tr>
					<tr>
					<td><b>Email</b></td>
							<td>:</td>
							<td>
								<input type="email"
								value="<?php echo $row['email']; ?>"
								name="email" required>"
						</td>
					</tr>
				</form>
			</table>
		</p>
	</div>
</div>
</form>
</body>
</hmtl>