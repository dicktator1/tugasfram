<?php 
  $username = $_POST['username'];
  $password=$_POST['password'];	

if($username == "admin" && $password == "admin")
{
echo "Login Sukses";
header('location: http://localhost/web/index.php?');
die;
}
else 
{
//echo"Login Gagal";
header('location: http://localhost/web/form_login.php?message=Username Atau Password yang diinput salah');
die;
}

?>