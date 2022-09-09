<?php
Session_start();
include('config.php');

if(isset($_POST['username']) AND isset($_POST['password'])){

	$ref = $_POST['ref'];
	if($ref == 1){

		$uri = '/index.php';

	} else if($ref == 2){
		$uri = '/produk.php';

	} else{
		$uri = '/gallery.php';

	}


	if(strtolower($_POST['username']) == strtolower($set['email_login'])){

		if(strtolower($_POST['password']) == strtolower($set['password_login'])){

			$_SESSION['login'] = true;
			redir($uri);


		} else{
			$_SESSION['error'] = 'Invalid Password';
			redir($uri);

		}

	} else{

		$_SESSION['error'] = 'Invalid Email';
		redir($uri);

	}

}

function redir($uri){
	header("HTTP/1.1 301 Moved Permanently"); 
	header("Location: ".$uri); 
	exit();
}