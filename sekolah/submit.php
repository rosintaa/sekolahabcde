<?php
include('connect.php');
$nama=$_POST['nama'];
$nis=$_POST['nis'];
$alamat=$_POST['alamat'];
$submit=mysqli_query($con, "INSERT INTO siswa (nama,nis,alamat) VALUES ('$nama','$nis','$alamat')");
header("Location: index.php")
?>