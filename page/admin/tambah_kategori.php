<?php
	include"../../db.php";
	$kategori = $_POST['kategori'];
	mysqli_query($mysql, "INSERT into kategori set kategori='$kategori'");
	header("location:kategori.php");
?>