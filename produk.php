<?php
Session_start();
include('config.php');

if(isset($_SESSION['login'])){
	$link_produk = 'href="https://api.whatsapp.com/send?phone=628500000000&text=Hallo%20pak,%20Saya%20Mau%20Beli"';
} else{
	$link_produk = 'href="#" onclick="login_notif();"';
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Produk - Selamat datang pengunjung</title>
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
    <li><a href="index.php"><i class="fa-solid fa-house"></i> Home</a></li>
    <li class="active"><a href="produk.php">List Produk</a></li>
    <li><a href="gallery.php">Gallery Foto</a></li>
  </ul>
</nav>
</header>

<!-- Main --> 
<main>

<!-- content -->
<div class="content">
	<div class="judul"><i class="fa-solid fa-circle-info"></i> Produk</div>
	<div>&nbsp;</div>
	<div class="produk_main">

		<div class="produk_list">
			<img src="img/jamu_beras_kencur.png" alt="jamu_beras_kencur.png">
			<div class="info">
				<span class="title_produk">Jamu Beras Kencur</span>
				<br/>
				<p class="price">
					Rp. 10.000,00
				</p>
				<p class="terjual">-5 Terjual</p>
				<span class="stars"><i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i></span>
				<p class="desk">
					Jamu beras kencur bermanfaat untuk Mempertahankan gula darah normal, Mencegah diare, Meredakan batuk berdahak dll. Dijamin Ampuh 100%
				</p>
				<div class="btn_beli" align="center">
					<a <?php print $link_produk;?> title="Beli Jamu">Beli Produk</a>
				</div>
			</div>
		</div>

		<div class="produk_list">
			<img src="img/jamu_kunyit_asam.png" alt="jamu_kunyit_asam.png">
			<div class="info">
				<span class="title_produk">Jamu Kunyit Asam</span>
				<br/>
				<p class="price">
					Rp. 12.000,00
				</p>
				<p class="terjual">-33 Terjual</p>
				<span class="stars"><i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i></span>
				<p class="desk">
					Jamu kunyit asam bermanfaat untuk mengatasi sakit perut saat datang bulan dan mengatasi masalah haid.
				</p>
				<div class="btn_beli" align="center">
					<a <?php print $link_produk;?> title="Beli Jamu">Beli Produk</a>
				</div>
			</div>
		</div>

		<div class="produk_list">
			<img src="img/jamu_sinom.png" alt="jamu_sinom.png">
			<div class="info">
				<span class="title_produk">Jamu Sinom</span>
				<br/>
				<p class="price">
					Rp. 6.000,00
				</p>
				<p class="terjual">-120 Terjual</p>
				<span class="stars"><i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i></span>
				<p class="desk">
					Jamu Sinom dapat Menyegarkan tubuh, Melancarkan peredaran darah, Membantu proses detoksifikasi, Melancarkan BAB. Terbukti Ampuh 100%
				</p>
				<div class="btn_beli" align="center">
					<a <?php print $link_produk;?> title="Beli Jamu">Beli Produk</a>
				</div>
			</div>
		</div>


		<div class="produk_list">
			<img src="img/jamu_kudu_laos.png" alt="jamu_kudu_laos.png">
			<div class="info">
				<span class="title_produk">Jamu Kudu Laos</span>
				<br/>
				<p class="price">
					Rp. 16.000,00
				</p>
				<p class="terjual">-17 Terjual</p>
				<span class="stars"><i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i></span>
				<p class="desk">
					Jamu kudu laos ini dapat menghilangkan herpes dan banyak mengandung vitamin A, vitamin C, juga berkhasiat untuk meningkatkan pencernaan, penglihatan optimal, dan meningkatkan kekebalan.
				</p>
				<div class="btn_beli" align="center">
					<a <?php print $link_produk;?> title="Beli Jamu">Beli Produk</a>
				</div>
			</div>
		</div>


		<div class="produk_list">
			<img src="img/jamu_cabe_puyang.png" alt="jamu_cabe_puyang.png">
			<div class="info">
				<span class="title_produk">Jamu Cabe Puyang</span>
				<br/>
				<p class="price">
					Rp. 24.000,00
				</p>
				<p class="terjual">-37 Terjual</p>
				<span class="stars"><i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i></span>
				<p class="desk">
					Jamu cabe puyang dapat menurunkan demam, melancarkan peredaran darah, meredakan pegal Linu juga berkhasiat untuk menambah nafsu makan.
				</p>
				<div class="btn_beli" align="center">
					<a <?php print $link_produk;?> title="Beli Jamu">Beli Produk</a>
				</div>
			</div>
		</div>


		<div class="produk_list">
			<img src="img/jamu_kunci_sirih.png" alt="jamu_kunci_sirih.png">
			<div class="info">
				<span class="title_produk">Jamu kunci sirih</span>
				<br/>
				<p class="price">
					Rp. 13.000,00
				</p>
				<p class="terjual">-12 Terjual</p>
				<span class="stars"><i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i></span>
				<p class="desk">
					Jamu kunci sirih bermanfaat mengatasi masalah keputihan, menghilangkan bau badan tidak sedap, dan mengatasi jerawat. Jamu kunci sirih juga dapat merapatkan organ kewanitaan.
				</p>
				<div class="btn_beli" align="center">
					<a <?php print $link_produk;?> title="Beli Jamu">Beli Produk</a>
				</div>
			</div>
		</div>


		<div class="produk_list">
			<img src="img/jamu_uyup_uyup.png" alt="jamu_uyup_uyup.png">
			<div class="info">
				<span class="title_produk">Jamu Uyup-Uyup</span>
				<br/>
				<p class="price">
					Rp. 18.300,00
				</p>
				<p class="terjual">-28 Terjual</p>
				<span class="stars"><i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i></span>
				<p class="desk">
					Jamu uyup-uyup mempunyai khasiat yaitu untuk melancarkan produksi ASI (air susu ibu), menghilangkan bau badan, mendinginkan perut, serta menyegarkan tubuh.
				</p>
				<div class="btn_beli" align="center">
					<a <?php print $link_produk;?> title="Beli Jamu">Beli Produk</a>
				</div>
			</div>
		</div>



	</div>

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
			echo '<div class="admin_info"><h3>Hay, '.$set['nama_admin'].'!</h3> <br/> <a href="/logout.php?ref=2">Logout</a></div>';

		} else{
			echo '
			<div class="admin_info"><h3>Login Account</h3></div>
			<form action="/login.php" method="post">
				<span>Email :</span> <br/>
				<input type="email" placeholder="email@gmail.com" name="username">
				<div style="height: 10px">&nbsp;</div>
				<span>Password :</span> <br/>
				<input type="password" placeholder="Password" name="password">
				<input type="hidden" name="ref" value="2">
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

	<div>&nbsp;</div>
	<div>&nbsp;</div>
	<div class="sidebar">
		<div class="admin_info"><i class="fa-solid fa-circle-info"></i> TENTANG KAMI</div>
		<div class="about">
			<p><?php print $set['about_website']?></p>
		</div>
	</div>


</aside>
<!-- Aside -->



</main> <!-- Main end -->


<!-- Footer -->
<footer>
	&copy; Jual-jamu.com 2022
</footer> <!-- Footer end-->

	<script type="text/javascript">
		
		function login_notif(){
				Swal.fire(
			  	'Failed',
			  	"Anda harus login dahulu",
			  	'warning'
				);
		}

	</script>

</div>
</body>
</html>