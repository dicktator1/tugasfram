<html>
<body>

<?php
if ($_POST) {
	$firstName = $_POST["firstName"];
	$email = $_POST['email'];
	$validate = true;

	if (empty($email)) {
		echo 'email udah kadaluarsa';
		$validate = false;

	}

	if ($validate) {

?>

WOI <?php echo $_POST['firstname']; ?>, your email, <?php echo $_POST['email']; ?>, has now been added.

<?php
} 
  } else {
	?>

<form action="form.php" method="get">
First name: <input type="text" name="firstName" />
<br>
email: <input type="text" name="email" />
<br>
<input type="submit" />
</form>
<?php
}}
?>
</body>
</html>