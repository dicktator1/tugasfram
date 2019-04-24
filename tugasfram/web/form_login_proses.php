<?php 
session_start();
  $username = $_POST['username'];
  $password=$_POST['password'];	

if($username == "admin" && $password == "admin")
{
echo "Login Sukses";
$_SESSION['is_login'] = true;
header('location: http://localhost/rahmat/web/index.php?');
die;
}
else 
{
//echo"Login Gagal";
header('location: http://localhost/rahmat/web/form_login.php?message=Username Atau Password yang diinput salah');
die;
}

?>