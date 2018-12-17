<?php
include("../modelo/registro.php");

$nombre = $_POST['nombre'];
$usuario = $_POST['usuario'];
$password = $_POST['password'];
$password2 = $_POST['password2'];
$correo = $_POST['correo'];

$registros = new registro();
$registros->registrar_usuario($nombre,$usuario,$password,$password2,$correo);
$registros->cerrar_sesion();
?>
