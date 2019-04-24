<?php
 $teks="Hello World";

 for($a=1;$a<=5;$a++)
{
echo"<h".$a.">".$teks."</h".$a.">";
}


$teks="Hello World";

 for($a=1;$a<=5;$a+=2)
{
echo"<h".$a.">".$teks."</h".$a.">";
}


$teks="Hello World";

 for($a=10;$a>=5;$a--)
{
echo"<h".$a.">".$teks."</h".$a.">";
}

for($a=1;$a<=3;$a++)

{
 
for($b=1;$b<=5;$b++)

{
 echo"Nilai a=".$a."Nilai b=".$b."<br/>";
}
}
echo "<select>";


for($b=2018;$b>=2000;$b--)

{
 echo"<option>".$b."</option>";
}
echo "</select>";

echo "<table border =\"1\" style='border-collapse: collapse'>";
echo "<tbody>";
	for ($row=1; $row <= 5; $row++) { 
		echo "<tr> \n";
		for ($col=1; $col <= 4; $col++) { 
		   $p = $col * $row;
		   echo "<td>$p</td> \n";
		   	}
	  	    echo "</tr>";
		}
		echo "</table>";
		echo "</tbody>";



?>