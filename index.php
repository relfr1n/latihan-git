<?php
Session_start();
include('config.php');
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Selamat datang pengunjung</title>

<meta name="viewport" content="width=device-width, initial-scale=1 user-scalable=no">
<link rel="stylesheet" type="text/css" href="asset/style.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<script src="/asset/web/js/jquery-2.0.0.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>
<body>
<div class="wrapper">
<!-- header -->
<header>
<div class="logo">Jual-jamu.com</div>
<nav>
  <ul>
    <li class="active"><a href="index.php"><i class="fa-solid fa-house"></i> Home</a></li>
    <li><a href="produk.php">List Produk</a></li>
    <li><a href="gallery.php">Gallery Foto</a></li>
  </ul>
</nav>
</header>

<!-- Main --> 
<main>

<!-- content -->
<div class="content">

<article>
	<div class="judul"><i class="fa-solid fa-circle-info"></i> Tentang Kami</div>
	<div class="expert">
		<p><?php print $set['about_website'];?></p>
	</div>
</article>

<article>
	<div class="judul">Manfaat Jamu</div>
	<div class="expert">
		<p>Jamu sangat bermanfaat untuk mengobati berbagai macan penyakit. diantaranya Mengatasi gatal-gatal, penyakit kulit, Menurunkan kolesterol, Mengatasi pegal, Meredakan pusing. Tak hanya itu jamu juga bisa untuk perawatan kulit</p>
	</div>
</article>

<article>
	<div class="judul">Terhubung dan konsultasi dengan kami</div>
	<div class="expert">

			<div class="terhubung_sosmed">
				<a href="https://facebook.com/facebookkamu"><i class="fa-brands fa-facebook-square"></i></a>
				<a href="https://instagram.com/instagramkamu"><i class="fa-brands fa-instagram-square"></i></a>
				<a href="https://api.whatsapp.com/send?phone=6285749805861&text=Hallo%20pak"><i class="fa-brands fa-whatsapp-square"></i></a>
				<a href="https://youtube.com"><i class="fa-brands fa-youtube-square"></i></a>
			</div>


	</div>
</article>

</div>
<!-- content end -->


<!-- Aside -->	
<aside>

	<div class="form-login">
		<?php
		if(isset($_SESSION['error'])){
			echo '<script>Swal.fire(\'Warning\',\''.$_SESSION['error'].'\',\'error\');</script>';
			unset($_SESSION['error']);
		}

		if(isset($_SESSION['login'])){
			echo '<div class="admin_info"><h3>Hay, '.$set['nama_admin'].'!</h3> <br/> <a href="/logout.php?ref=1">Logout</a></div>';

		} else{
			echo '
			<div class="admin_info"><h3>Login Account</h3></div>
			<form action="/login.php" method="post">
				<span>Email :</span> <br/>
				<input type="email" placeholder="email@gmail.com" name="username">
				<div style="height: 10px">&nbsp;</div>
				<span>Password :</span> <br/>
				<input type="password" placeholder="Password" name="password">
				<input type="hidden" name="ref" value="1">
				<div>&nbsp;</div>
				<input type="submit" name="login" value="Login">
			</form>';
		}

		?>

	</div>

	<hr/>
		<div class="admin_info"><h3>ADMIN INFO</h3></div>

	<div align="center" class="foto_profile">
	    <img src="img/avatar.png" class="img"></img>
	</div>
	<table>
		<tr><td>Nama</td> <td>: <?php print $set['nama_admin'];?></td></tr>
		<tr><td>Alamat</td> <td>: <?php print $set['alamat_lengkap'];?></td></tr>
		<tr><td>Pendidikan</td> <td>: <?php print $set['pendidikan'];?></td></tr>
		<tr><td>Email</td> <td>: <?php print $set['email_profile'];?></td></tr>
		<tr><td>Nomor Telp</td> <td>: <?php print $set['notelp'];?></td></tr>
	</table>


</aside>
<!-- Aside -->



</main> <!-- Main end -->


<!-- Footer -->
<footer>
	&copy; Jual-jamu.com 2022
</footer> <!-- Footer end-->

</div>
</body>
</html>