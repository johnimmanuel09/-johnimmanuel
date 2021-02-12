<?php
	include"../../db.php";
	$kategori = $_POST['kategori'];
	$id_katego = mysqli_query($mysql, "SELECT * from kategori where kategori='$kategori'");
	$id_kategor = mysqli_fetch_array($id_katego);
	$id_kategori = $id_kategor['id_kategori'];
	$katalog = $_POST['katalog'];
	mysqli_query($mysql, "INSERT into katalog set id_kategori='$id_kategori',katalog='$katalog'");
	header("location:katalog.php");
?>