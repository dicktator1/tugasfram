<?php 
error_reporting(0);
include "session.php"; 

if ($_GET['acstion'] == "logout") {
session_start();
session_destroy();
header('location: http://localhost/rahmat/web/form_login.php?message=Username Atau Password yang diinput salah');
   }?>
<html>
<head>
	<title>Kontak</title>
	<?php include "header.php"; ?>
</head>
<body class="body-beranda">
<div id="logo">
	

<a href="/">
	<a href="/">
		<img src="media/hamster.png">
		<span>Belajar Web Design</span>
	</a>
</div>
<?php
include 'menu.php'; ?>
<div id="container"><br />
<?php
		if ($_GET) {
		?>
		<div class="text-alert">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  <?php echo $_GET['message']; ?>
</div>
		<?php
	}
	?>
	<form <form method="post" action="kontak_proses.php">
	<center><h1 class="content">Isi Pertanyaan Anda</h1></center>
	<center><p class="content">
	<label for="nama">Nama</label><br />
    <input type="text" name="nama" placeholder="Nama" required="required"><br />

    <label for="email">Email</label><br />
    <input type="email" name="email" placeholder="Email" required="required"><br />
    <label for="pertanyaan">Pertanyaan</label><br />
    <textarea id="pertanyaan" name="pertanyaan" placeholder="PERTANYAAN" style="height:200px"></textarea>
<br />
    <input type="submit" value="Submit" required="required">

  </form>
	</p></center>
</div>
</body>
</html>