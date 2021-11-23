<?php 
include 'koneksi.php';
$nomoe = $_GET['id_user'];
mysqli_query($host,"UPDATE travelog SET is_deleted=1 WHERE id_user='$nomor'")or die(mysql_error());

header("location:index.php");
?>