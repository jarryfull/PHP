<?php
include "../modelo/conexion.php";
include "producto.php";
session_start();
$conexion = new conexion();

if (!isset($_SESSION['carrito'])) {
    $_SESSION['carrito'] = "";
}
if (isset($_SESSION['carrito'])) {
    if (isset($_GET['id'])){
      echo "ID: ".$_GET['id'];
      $contador = $conexion->consulta_sql("SELECT * FROM productos where id_producto=".$_GET['id']);

        $producto = new Item();
        $producto->id = $contador['id_producto'];
        $producto->nombre = $contador['titulo'];
        $producto->precio = $contador['precio'];
        $producto->cantidad = 1;

        //revisar si el producto esta en el carrito
        $index = -1;
        $carrito = unserialize(serialize($_SESSION['carrito']));
        for ($i=0; $i <count($carrito); $i++)
            if ($carrito[$i]->id == $_GET['id'])
            {
                $index = $i;
                break;
            }
            if ($index == -1){
                $_SESSION['carrito'][]= $producto;
            }else{
                $carrito[$index]->cantidad++;
                $_SESSION['carrito'] = $carrito;
            }
        }
        header("location:../vista/home.php");
}
 ?>
