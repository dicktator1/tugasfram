<?php

$x = array(10,12,3,44,50,"Hallo");

echo'Array X ruang ke 0 berisi : '.$x[0].'<br/>';
echo'Array X ruang ke 5 berisi : '.$x[5].'<br/>';
echo'<br/>';


$y= array(
  0=>10,
  1=>12,
  2=>3,
3=>44,
4=>50,
5=>"Hallo",);

echo'Array Y ruang ke 1 berisi : '.$y[1].'<br/>';
echo'Array Y ruang ke 4 berisi : '.$y[4].'<br/>';

echo'<br/>';
  
for ($i= 0; $i<=5; $i++)

{

  echo "Nilai ruang ke ".$i." dari array x=".$x[$i]."<br/>";

}
echo'<br/>';
echo'<br/>';
 $x[]=6;
 $x[]=8;
 $x[]=1232;

for ($i= 0; $i<count($x); $i++)

{

  echo "Nilai ruang ke ".$i." dari array x=".$x[$i]."<br/>";

} 
?>