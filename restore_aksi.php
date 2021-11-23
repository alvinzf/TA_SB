<?php 
include 'koneksi.php';
$id = $_GET['id_user'];
mysqli_query($host,"UPDATE travelog SET is_deleted=0 WHERE id_user = '$id'")or die(mysql_error());

header("location:index.php");
?>