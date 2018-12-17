<?php
	session_start();
	session_destroy();
	unset($_SESSION['username']);
	$_SESSION['message'] = "Haz cerrado tu sesion";
	header("location: login.php");
?>