<?php
include"db.php";
session_start();
if(isset($_SESSION['email_su']))
{
	header("location:");
}
else if(isset($_SESSION['email_cus']))
{
	header("location:page/customer/home.php");
}
@$pesan = $_GET['pesan'];
if($pesan=="berhasil daftar")
{
	echo"<script type='text/javascript'>alert('Anda berhasil mendaftar,silahkan login');</script>";
}
else if($pesan=="login")
{
	echo"<script type='text/javascript'>alert('Anda harus login dulu');</script>";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>PORPOSTOKOON</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="js/jquery-ui/jquery-ui.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="assets/js/jquery-ui/jquery-ui.js"></script>
</head>
<body>
<div id="head">
	<div class="hdkiri">
	<a href="#">PORPOS<b>TOKO</b>ON.COM</a>
	</div>

	</div>
</div>
<div id="menu">
	<div class="menukiri">
		<ul>
		<li><a href="index.php"><span class="glyphicon glyphicon-home"></span> Beranda</a></li>
		<li><a href="index.php?page=tentang"><span class="glyphicon glyphicon-info-sign"></span> Tentang Kami</a></li>
		<li><a href="index.php?page=cara"><span class="glyphicon glyphicon-earphone"></span> Kontak Kami</a></li>
	</ul>
	</div>
	<div class="menukanan">
	<ul>
		<li><a data-toggle="modal" data-target="#daftar" ><span class="glyphicon glyphicon-pencil"></span> Buat Akun</a></li>
		<li><a data-toggle="modal" data-target="#login"><span class="glyphicon glyphicon-log-in"></span> Masuk</a></li>

	</ul>
	</div>
</div>
<div id="content">
	<div id="contentkiri">
		<div class="welcome">
			<?php
			@$page = $_GET['page'];
			if($page=="tentang")
			{
				include("tentang.php");
			}
			else if($page=="cara")
			{
				include("contact_us.php");
			}
			else{
			 	include("welcome.php");
			}
			?>
		</div>
		<div class="produk">
			<div class="hdproduk">
				Silahkan <a data-toggle="modal" data-target="#login" href="#"> <text style="color: yellow;">  Login </text></a> Terlebih Dulu Untuk Melihat Daftar Buku
			</div>
			

		</div>



	</div>
	
</div>
<!-- modal login -->

<div id="login" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header" style="text-align:center;background:#4CAF50;;color:#fff;">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Silahkan Login</h4>
			</div>
			<div class="modal-body">
				<form action="actlogin.php" method="post" onsubmit="return validasi()">
				<div>
				<span onclick="document.getElementById('login').style.display='none'" class="close" title="Close Modal">&times;</span>
				</div>	
				<div class="form-group">
						<label>Email</label>
						<input name="email" type="email" class="form-control" placeholder="please input your email" id="email">
					</div>
					<div class="form-group">
						<label>Password</label>
						<input name="password" type="password" class="form-control" placeholder="please input your password" id="password">
					</div>				
					<input type="submit" class="btn btn-primary" value="Login">
					<br>
					<br>
					belum punya akun? <a data-toggle="modal" data-target="#daftar">Daftar</a>
				</div>
			</form>
		</div>
	</div>
</div>

<script type="text/javascript">
	function validasi() {
		var email = document.getElementById("email").value;
		var password = document.getElementById("password").value;
		if (email != "" && password!="") {
			return true;
		}else{
			alert('Anda harus mengisi data dengan lengkap !');
		}
	}

	
</script>

<!--modal daftar-->
<div id="daftar" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header" style="text-align:center;background:#4CAF50;;color:#fff;">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Silahkan mengisi form pendaftaran</h4>
			</div>
			<div class="modal-body">
				<form action="actdaftar.php" method="post">
					<div class="form-group">
						<label>Nama</label>
						<input name="nama" type="text" class="form-control" placeholder="Nama Lengkap anda">
					</div>
					<div class="form-group">
						<label>Alamat Email</label>
						<input name="email" type="email" class="form-control" placeholder="email anda">
					</div>
					<div class="form-group">
						<label>Password</label>
						<input name="pass" type="password" class="form-control" placeholder="password">
					</div>
					<input type="submit" class="btn btn-primary" value="Simpan">
				</div>
			</form>
		</div>
	</div>
</div>



<!-- modal login dulu -->
<div id="logindulu" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header" style="text-align:center;background:#4682b5;;color:#fff;">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Silahkan Login dulu untuk dapat membeli</h4>
			</div>
			<div class="modal-body">
				<form action="actlogin.php" method="post">
					<div class="form-group">
						<label>Email</label>
						<input name="email" type="email" class="form-control" placeholder="email">
					</div>
					<div class="form-group">
						<label>Password</label>
						<input name="password" type="password" class="form-control" placeholder="Password">
					</div>				
					<input type="submit" class="btn btn-primary" value="Masuk">
					belum punya akun? <a data-toggle="modal" data-target="#daftar">Daftar</a>
				</div>
			</form>
		</div>
	</div>
</div>

<div id="footer" style="margin-top:1450px;">
	<?php include("footer.php") ?>
	
</div>
</body>
</html>