<?php
  $bil = array(9,2,10,3,7,5,2);
$max=0;
for($i = 0 ; $i < count($bil) ; $i++ ) 
{
	if ($max < $bil[$i] ) 
	{
		$max = $bil[$i];
}
}
echo "NILAI MAKSIMUM ADALAH :  " .$max;

?>
