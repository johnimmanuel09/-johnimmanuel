<?php
include"db.php";
$email = $_POST['email'];
$pass = $_POST['password'];
$q_log_cus = mysqli_query($mysql, "SELECT * from customer where email_cus = '$email' && password_cus='$pass'");
$q_log_su = mysqli_query($mysql, "SELECT * from superuser where email_su = '$email' && password_su = '$pass'");
$q_cus = mysqli_fetch_array($q_log_cus);
$q_su = mysqli_fetch_array($q_log_su);
$email_su = $q_su['email_su'];
$email_cus = $q_cus['email_cus'];
$nama_cus = $q_cus['nama_cus'];
$id_cus = $q_cus['id_cus'];
$nama_su = $q_su['nama_su'];
$level = $q_su['level'];
$cekCus = mysqli_num_rows($q_log_cus);
$cekSU = mysqli_num_rows($q_log_su);
if($cekCus > 0 || $cekSU >0){
	if($level=="admin")
	{
		session_start();
		$_SESSION['email_su'] = $email;
		$_SESSION['password_su'] = $pass;
		$_SESSION['nama_su'] = $nama_su;
		header("location:page/admin/index.php");
	}
	else {
		session_start();
		$_SESSION['email_cus'] = $email;
		$_SESSION['password_cus'] = $pass;
		$_SESSION['nama_cus'] = $nama_cus;
		$_SESSION['id_cus'] = $id_cus;
		header("location:page/customer/home.php");
	}
}
else{
	echo"<script type='text/javascript'>alert('Email / Password tidak valid');window.location.href='index.php';</script>";
}
?>