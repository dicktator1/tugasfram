<?php
$teks = "Hello World";

for ($a = 1; $a <= 6 ; $a++)
{
 echo "<h".$a.">".$teks."</h".$a.">";
}

for ($a = 1; $a <= 7 ; $a+=2)
{
 echo "<h".$a.">".$teks."</h".$a.">";
}

for ($a = 10; $a > 5 ; $a--)
{
 echo "<h".$a.">".$teks."</h".$a.">";
}

for ($a = 1; $a <=3 ; $a++)
{
	for ($b = 1; $b <= 2 ; $b++)
{
 echo "Nilai a =" .$a." Nilai b = ".$b." <br />";
}
}
for ($b = 2018; $b >= 2000 ; $b--)
{
 echo "".$b."<br/>";
}

?>