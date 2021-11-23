<?php
include 'koneksi.php';
$username = $_POST['username'];
$negara = $_POST['negara'];
$id_negara = $_POST['id_negara'];
$nama_hotel = $_POST['nama_hotel'];
$check_in = $_POST['check_in'];
$check_out = $_POST['check_out'];
$id_hotel = $_POST['id_hotel'];
$nama_kendaraan = $_POST['nama_kendaraan'];
$id_kendaraan = $_POST['id_kendaraan'];

mysqli_query($host, "");

mysqli_query($host, "UPDATE user, hotel, kendaraan, negara
SET user.username = '$username', negara.negara='$negara', negara.id_negara='$id_negara', hotel.nama_hotel='$nama_hotel', hotel.check_in='$check_in', hotel.check_out='$check_out', hotel.id_hotel='$id_hotel', kendaraan.nama_kendaraan='$nama_kendaraan', kendaraan.id_kendaraan='$id_kendaraan' 
 ");

header("location:index.php");
