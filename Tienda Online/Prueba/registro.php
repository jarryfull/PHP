<?php
session_start();
	$db = mysqli_connect("localhost", "root", "","autenticar");

	if(isset($_POST['register'])){

		$username = mysqli_real_escape_string($db,$_POST['username']);
		$email = mysqli_real_escape_string($db,$_POST['email']);
		$password = mysqli_real_escape_string($db,$_POST['password']);
		$password2 = mysqli_real_escape_string($db,$_POST['password2']);

		if ($password == $password2){
			$password = md5($password);
			$sql = "INSERT INTO autenticar(username, email, password) VALUES('$username','$email','$password')";
			mysqli_query($db, $sql);
			$_SESSION['message']= "Ahora a entrado";
			$_SESSION['username']= $username;
			header("location: home.php");
		}else{
			$_SESSION['message'] = "Los dos passwords no coinciden";
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title> Registro de Usuarios</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h1> Registro de Usuarios</h1>
	</div>
	<form method="post" action="registro.php">
	<table>
		<tr>
			<td> Usuario:</td>
			<td><input type="text" name="username" class="textArea"></td>
		</tr>
		<tr>
			<td> Email:</td>
			<td><input type="email" name="email" class="textArea"></td>
		</tr>
		<tr><tr>
			<td> Contraseña:</td>
			<td><input type="password" name="password" class="textArea"></td>
		</tr>
		<tr><tr>
			<td> Reescriba su Contraseña:</td>
			<td><input type="password" name="password2" class="textArea"></td>
		</tr>
		<tr><tr>
			<td></td>
			<td><input type="submit" name="register" value="Registrar"></td>
		</tr>
		<tr>
			
		</tr>
	</table>

</body>
</html>