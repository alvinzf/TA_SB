<?php 
include 'koneksi.php';
 
$username = $_POST['username'];
$password = ($_POST['password']);
$password = md5($password);

$admin = mysqli_query($mysqli, "SELECT * FROM admin WHERE admin_username='$username' AND admin_password='$password'");
$login = mysqli_query($mysqli, "SELECT * FROM user WHERE username_user='$username' AND password_user='$password'");
$id = mysqli_query($mysqli, "SELECT id_user FROM usher WHERE username='$username' AND password='$password'");
$id = mysqli_fetch_assoc($id);
$cek = mysqli_num_rows($login);
$admin = mysqli_num_rows($admin);

if ($admin>0){
	session_start();
	$_SESSION['id'] = $id;
	$_SESSION['status'] = "login";
	header("location:admin.php");
}
else{
	if($cek > 0){
		session_start();
		$_SESSION['id'] = $id;
		$_SESSION['status'] = "login";
		header("location:http://localhost/index.php");
	}else{	
		echo '<script>alert("Wrong User Details")</script>';
	}
} 

