<?php
session_start();
include("../modelo/conexion.php");
$guardar = new conexion;

$id = $_SESSION['id'];
$nombre = $_POST['nombre'];
$usuario = $_POST['usuario'];
$correo = $_POST['correo'];
$municipio = $_POST['municipio'];
$estado = $_POST['estado'];
$pais = $_POST['pais'];
$cp = $_POST['cp'];
$telefono = $_POST['telefono'];
$edad = $_POST['edad'];


$guardar->insertar("UPDATE usuarios SET nombre = '$nombre', usuario = '$usuario', correo = '$correo', municipio = '$municipio', estado = '$estado', pais = '$pais', cp = '$cp', telefono = '$telefono', edad = '$edad' WHERE id_usuario ='$id';");
header("location:../vista/configuracion.php");
?>
