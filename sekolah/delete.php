<?php
include('connect.php');
$id=$_GET ['id'];
$hapus=mysqli_query($con,"DELETE FROM siswa WHERE id='$id'");
header("Location: index.php")
?>