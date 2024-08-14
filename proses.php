<?php
include 'koneksi.php';
$nama = $_POST['nama'];
$umur = $_POST['umur'];

$sql = "INSERT INTO siswa VALUES('','$nama','$umur')";
$query = mysqli_query($koneksi, $sql);
header("Location: index.php");
?>
