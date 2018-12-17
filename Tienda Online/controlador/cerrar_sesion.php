<?php
  session_start();
  unset($_SESSION['nom'],$_SESSION['id']);
  header("location:../vista/login.php");
 ?>
