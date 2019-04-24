
<?php
error_reporting(0);

//Nama barang
$rahmat = array(
	0 => "Sabun Lifebuoy",
	1 => "Permen Blaster",
	2 => "Pasta Gigi Pepsodent",
	3 => "Madu Arbain",
	4 => "Kecap ABC",
	5 => "Saus Tomat ABC",
	6 => "Gula Gulaku",
	7 => "Rinso",
	8 => "Super Pel",
	9 => "Permen Tango");
//Harga barang
$rahmat = array(
	0 => 1500,
	1 => 5600,
	2 => 4560,
	3 => 30000,
	4 => 7250,
	5 => 6700,
	6 => 8900,
	7 => 7100,
	8 => 6450,
	9 => 5600);

$urutanbarang = $_POST['urutanbarang'];
$jumlahbarang = $_POST['jumlahbarang'];
$total = $rahmat[$_POST['urutanbarang']] * $_POST['jumlahbarang'];
$namabarang = $rahmat[$_POST['urutanbarang']];
echo "Nama barang: $namabarang<br>Total belanja: $total";