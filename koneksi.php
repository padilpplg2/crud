<?php

$koneksi = mysqli_connect("localhost","root","","crud_padil");
if(!$koneksi){
    die(mysqli_connect_error($koneksi));
}

?>