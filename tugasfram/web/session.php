<?php
session_start();
if (!$_SESSION['is_login']){
	header('location: http://localhost/rahmat/web/form_login.php?message=Username Atau Password yang diinput salah');
	die;
}