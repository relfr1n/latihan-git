<?php
Session_start();
Session_destroy();

if(isset($_GET['ref'])){

	$ref = $_GET['ref'];
	if($ref == 1){

		$uri = '/index.php';

	} else if($ref == 2){
		$uri = '/produk.php';

	} else{
		$uri = '/gallery.php';

	}

	redir($uri);
}

function redir($uri){
	header("HTTP/1.1 301 Moved Permanently"); 
	header("Location: ".$uri); 
	exit();
}