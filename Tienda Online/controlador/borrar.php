<?php
session_start();

if (isset($_GET['borrar'])){
    $cart = unserialize(serialize($_SESSION['carrito']));
    unset($cart[$_GET['borrar']]);
    $cart = array_values($cart);
    $_SESSION['carrito'] = $cart;
    header("location:../vista/cartVista.php");
}

?>
