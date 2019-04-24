<?php
include 'config.php';

$nama = $_POST['nama'];
$email = $_POST['email'];
$pertanyaan = $_POST['pertanyaan'];
$created = date('y-m-d h:i');

$sql = "INSERT INTO kontak (nama, email, pertanyaan, created) 
VALUES ('$nama', '$email', '$pertanyaan', '$created'); ";

if ($conn->query($sql) === TRUE) {
	header("Location: kontak.php?message=Pertanyaan Berhasil Di Kirimkan");
	echo "Data Berasil Disimpan";
} else{
	echo "Error Dengan pesan: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>