<?php

$usia = $_POST['bill'];

if ($usia < 6)
{
  echo "Masih NUB kau dekku";
}
else if ($usia <= 16)
{
 echo "Masih bocah CENCEN ya nak";
}
else if ($usia <= 50)
{
 echo "Udah BISA LA INI EKAN";
}
else
echo "UDAH BAUK TANAH AJA YA";

?>