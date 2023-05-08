<?php
include('connect.php');
$hapus=mysqli_query($con,"DELETE FROM siswa");
header("Location: index.php")
?>