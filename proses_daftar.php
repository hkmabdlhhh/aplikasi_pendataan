<?php
include "koneksi.php";

$nama = $_POST['nama'];
$email = $_POST['email'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$alamat = $_POST['alamat'];

$insert = mysqli_query ($mysqli, "insert into pendaftaran set nama='$nama', email='$email', tanggal_lahir='$tanggal_lahir', alamat='$alamat'");

if($insert){
	header('location:home.php?status=sukses');
}else{
	header('location:form_daftar.php?status=gagal');
}
?>