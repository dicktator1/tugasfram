<?php include "header.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<title>FORM LOGIN DAN CSS</title>
	<link rel="stylesheet" type="text/css" href="style.css" media="all" />
</head>
<body>
<div id="kotak">
	<div id="atas">LOGIN ADMINISTRATOR</div>
	<?php
		if ($_GET) {
		?>
		<div class="text-alert">
			<?php echo $_GET['message']; ?>
		</div>
		<?php
	}
	?>
	<div id="bawah">
		<form method="POST" action="/rahmat/web/form_login_proses.php">
			<input class="masuk" type="text" placeholder="Username .." name="username"><br />
			<input class="masuk" type="password" placeholder="Password .." name="password"><br />
			<input id="tombol" type="submit" name="login" value="Login">
		</form>
	</div>
</div>
</body>
</html>