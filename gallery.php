<?php
Session_start();
include('config.php');
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Gallery - Selamat datang pengunjung</title>
<meta name="viewport" content="width=device-width, initial-scale=1 user-scalable=no">
<link rel="stylesheet" type="text/css" href="asset/style.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.5.0-beta.5/css/lightgallery.min.css" integrity="sha512-Szyqrwc8kFyWMllOpTgYCMaNNm/Kl8Fz0jJoksPZAWUqhE60VRHiLLJVcIQKi+bOMffjvrPCxtwfL+/3NPh/ag==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.5.0-beta.5/lightgallery.min.js" integrity="sha512-+cRLP8t0rsqPalRf//6kfVwRVPzxvwtgLOm8XoSw+M/ND6/0aODP3WFs8m4EPtqsJ9aurqbYq4q/0u8lRJSldA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
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
    <li><a href="produk.php">List Produk</a></li>
    <li class="active"><a href="gallery.php">Gallery Foto</a></li>
  </ul>
</nav>
</header>

<!-- Main --> 
<main>

<!-- content -->
<div class="content">
	<div class="judul"><i class="fa-solid fa-circle-info"></i> Gallery</div>

	<div>&nbsp;</div>
	<div id="lightgallery" align="center">

		<?php

			for($i = 1; $i < 11; $i++){
			  echo '<a href="img/gallery/img'.$i.'.jpg" title="View img">
			      <img src="img/gallery/img'.$i.'.jpg" alt="img/gallery/img'.$i.'.jpg" />
			  </a>';
			}
	  ?>


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
			echo '<div class="admin_info"><h3>Hay, '.$set['nama_admin'].'!</h3> <br/> <a href="/logout.php?ref=3">Logout</a></div>';

		} else{
			echo '
			<div class="admin_info"><h3>Login Account</h3></div>
			<form action="/login.php" method="post">
				<span>Email :</span> <br/>
				<input type="email" placeholder="email@gmail.com" name="username">
				<div style="height: 10px">&nbsp;</div>
				<span>Password :</span> <br/>
				<input type="password" placeholder="Password" name="password">
				<input type="hidden" name="ref" value="3">
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

</div>

<script type="text/javascript">
    lightGallery(document.getElementById('lightgallery')); 
</script>

</body>
</html>