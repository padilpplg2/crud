<?php
include "koneksi.php";
$nama = $_GET['nama'];
$sql = "DELETE FROM siswa WHERE nama ='$nama'";
$query = mysqli_query($koneksi, $sql);

header("Location: index.php");