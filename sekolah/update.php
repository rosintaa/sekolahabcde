<?php
include('connect.php');
$id=$_POST['id'];
$nama=$_POST['nama'];
$nis=$_POST['nis'];
$alamat=$_POST['alamat'];

$update=mysqli_query($con,"UPDATE siswa SET nama='$nama',nis='$nis',alamat='$alamat' WHERE id='$id'");
header("Location: index.php")
?>