<?php
	include "../../db.php";
	$kd=$_GET['id'];
	$qry=mysqli_query($mysql, "DELETE FROM kategori WHERE id_kategori='$kd'");
	header('location:kategori.php');
?>