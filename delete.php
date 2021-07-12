<?php 

include 'config.php';

$id =$_GET['id'];

mysqli_query($koneksi, "delete from karyawansawit061 where id='$id'");

header("location:index.php");