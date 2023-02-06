<?php
include "koneksi.php";

$nama = $_POST['nama'];
$email =$_POST['email'];
$tanggal = $_POST['tanggal_lahir'];
$biodata = $_POST['informasi'];

$insert = mysqli_query ($mysqli,"insert into peserta set nama ='$nama',email='$email',tanggal_lahir='$tanggal_lahir','$,informasi='$informasi'");

if ($insert){
	header('location:daftar_peserta.php?status=sukses');
}else{
	header('location:form_peserta.php?status=gagal');
}

?>