<?php

$postdata = $_POST['data'];

$jumlah = 0;
for($i = 0 ; $i < count($postdata) ; $i++ ){
	$jumlah += $postdata[$i];
}

echo "rata ratanya adalah : " .$jumlah/count($postdata);
?>