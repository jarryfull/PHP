
<?php 
	session_start();
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
	<h1>Pagina de Inicio</h1>
</div>
<?php
	if (isset($_SESSION['message'])) {
		echo "<div id='error'>".$_SESSION['message']."</div>";
		unset($_SESSION['message']);
	}
?>


<h1>Home</h1>
<div><h4>Bienvenido <?php echo $_SESSION['username'];  ?></h4></div>
<div><a href="logout.php">Logout</a></div>
</body>
</html>