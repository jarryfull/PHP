<?php
include("../modelo/conexion.php");
$conexion = new conexion();
session_start();
 ?>

<nav class="navbar"></nav>
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <!-- <a class="navbar-brand" href="home.php"> Inicio </a> -->
    </div>
    <ul class="nav navbar-nav">
        <li class="active"><a href="home.php"><span class="glyphicon glyphicon-home"></span> Inicio</a></li>
    </ul>
    <!-- Menu desplegable "Cuenta" -->
    <ul class="nav navbar-nav navbar-right">
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <?php if(isset($_SESSION['nom']))
            {
              echo '<span class="glyphicon glyphicon-user"></span> '. $_SESSION['nom'];
            }
            else {
              echo '<span class="glyphicon glyphicon-user"></span> Cuenta';
            }
          ?>
          <span class="caret"></span>
        </a>
        <ul class="dropdown-menu">
          <li><a href="../vista/configuracion.php"><span class="glyphicon glyphicon-wrench"></span> Configuracion </a></li>
          <li><a href="../controlador/cerrar_sesion.php"><span class="glyphicon glyphicon-remove"></span> Cerrar Sesion </a></li>
        </ul>
      </li>
    </ul>
    <!-- Menu "Carrito" -->
    <ul class="nav navbar-nav navbar-right">
      <li>
        <a href="../vista/cartVista.php"><span class="glyphicon glyphicon-shopping-cart"></span> Carrito <span class="badge">
            <?php
                if (isset($_SESSION['carrito'])) {
                    echo count($_SESSION['carrito']);
                }
                else {
                    echo "Vacio";
                }
            ?>
        </span></a>
      </li>
    </ul>

    </ul>
  </div>
</nav>
