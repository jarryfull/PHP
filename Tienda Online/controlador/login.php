<?php
include("../modelo/conexion.php");

$user = $_POST['usuario'];
$pass = $_POST['password'];

$usuarios = new conexion;
$usuarios->iniciar_sesion($user,$pass);
$usuarios->cerrar_sesion();
?>
