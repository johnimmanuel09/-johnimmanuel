<?php 
$mysql = mysqli_connect("localhost","root","","porpostokoon");
 
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
 
?>