<?php
include "config.php";


$id = $_GET['id'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$pertanyaan = $_POST['pertanyaan'];
$created = date('Y-m-d h:i');

$sql = "UPDATE kontak set
		nama='$nama',
		email='$email',
		pertanyaan='$pertanyaan',
		created='$created'
		WHERE id=$id ";

if ($conn->query($sql) == TRUE) {
	//echo "Data berhasil disimpan";

	header('Location: kontak_proses_edit.php');
	die;
} else{
	echo "Error dengan pesan: " .$sql."<br>" . 
	$conn->error;
}
$conn->close();
?>
