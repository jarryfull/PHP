<?php 
	session_start();

	$db = mysqli_connect("localhost", "root", "", "autenticar");
	if (isset($_POST['login'])) {
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$password = mysqli_real_escape_string($db, $_POST['password']);
		$password = md5($password);
		$sql = "SELECT * FROM autenticar WHERE username='$username' AND password='$password'";
		$result = mysqli_query($db, $sql);
		if (mysqli_num_rows($result) == 1) {
			$_SESSION['message'] = "Haz iniciado la sesion";
			$_SESSION['username'] = $username;
			header("location: home.php");
		}else{
			$_SESSION['message'] = "Usuario/password incorrecto";
		}
	}
?>



<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title>Registro de Usuarios</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="header"> 
	<h1>Pagina de Entrada</h1>
</div>
<?php
	if (isset($_SESSION['message'])) {
		echo "<div id='error_msg'>".$_SESSION['message']."</div>";
		unset($_SESSION['message']);
	}
?>


<form method="post" action="login.php">
	<table>
		<tr>
			<td>Usuario:</td>
			<td><input type="text" name="username" class="textArea"></td>
		</tr>

		<tr>
			<td>Contraseña:</td>
			<td><input type="password" name="password" class="textArea"></td>
		</tr>

		<tr>
			<td></td>
			<td><input type="submit" name="login" value="Login"></td>
		</tr>
	</table>
</form>
</body>
</html>