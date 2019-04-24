<?php
session_start();
session_destroy();

// var_dump($_SESSION);exit;
header('location: http://localhost/rahmat/web/form_login.php?message=Login Dulu Boy');
?>