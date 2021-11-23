<?php 
include 'koneksi.php';
$username = $_POST['username'];
$password = $_POST['password'];
$negara = $_POST['negara'];
$id_negara = $_POST['id_negara'];
$nama_hotel = $_POST['hotel'];
$check_in = $_POST['check-in'];
$check_out = $_POST['check_out'];
$id_hotel = $_POST['id_hotel'];
$nama_kendaraan = $_POST['kendaraan'];
$id_kendaraan = $_POST['id_kendaraan'];

// mysqli_query($host,"INSERT INTO travelog VALUES('','$username',0,'$negara','$id_negara','$nama_kendaraan','$nama_hotel','$check_in','$check_out')");
mysqli_query($host,"INSERT INTO username VALUES ('','$username','$password')");
mysqli_query($host,"INSERT INTO negara VALUES (0,'','$id_negara','$id_kendaraan','$id_hotel','$negara')");
mysqli_query($host,"INSERT INTO kendaraan VALUES ('$id_kendaraan','$id_negara','$nama_kendaraan')");
mysqli_query($host,"INSERT INTO hotel VALUES ('$id_negara','$id_hotel','$nama_hotel','$check_in','$check_out')");
mysqli_query($host,"UPDATE travelog");

header("location:index.php");
?>