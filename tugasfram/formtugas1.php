<?php
$rahmat = array(
	0 => 273,
	1 => 281,
	2 => 384,
	3 => 119,
	4 => 392,
	5 => 184,
	6 => 105,
	7 => 129,
	8 => 204,
	9 => 219,
	10 => 274,
	11 => 275,
	12 => 263);
$bil1 = $_POST['bilangan'];
$urutan = array_search(''.$_POST["bilangan"].'', $rahmat);
$rows = in_array($_POST['bilangan'], $rahmat);
	if (in_array($bil1, $rahmat)) {
	echo "bilangan ditemukan: $bil1 pada urutan $urutan";
}
else
echo "Tidak ditemukan";
