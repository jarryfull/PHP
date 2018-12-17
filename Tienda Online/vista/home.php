
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Bienvenido a GameOn</title>
    <link rel="stylesheet" type="text/css" href="../Boostrap/css/bootstrap.css">
  </head>
  <body>
    <!-- CREA LA LISTA DEL MENU PRINCIPAL DEL HOME -->
    <?php include "nav.php";?>
    <hr>

    <!-- CREANDO CARRUSEL -->
    <div id="carrusel" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carrusel" data-slide-to="0" class="active"></li>
        <li data-target="#carrusel" data-slide-to="1"></li>
        <li data-target="#carrusel" data-slide-to="2"></li>
        <li data-target="#carrusel" data-slide-to="3"></li>
      </ol>

      <!-- Se crea el carrusel -->
      <center>
        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <img src="../imagenes/asuspc.png" alt="Asus-PC">
          </div>

          <div class="item">
            <img src="../imagenes/lenovopc.jpg" alt="Lenovo-PC">
          </div>

          <div class="item">
            <img src="../imagenes/nvidiapc.jpg" alt="Nvidia-PC">
          </div>

          <div class="item">
            <img src="../imagenes/tarjetamadre.jpg" alt="Tarjeta-Madre">
          </div>
        </div>

        <!-- Se crea el boton izq para el carrusel -->
        <a class="left carousel-control" href="#carrusel" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <spanclass="sr-only"></span>
        </a>
        <!-- Se crea el boton der para el carrusel -->
        <a class="right carousel-control" href="#carrusel" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only"></span>
        </a>
      </center>
    </div>
    <hr>
    <!-- <div class="container"> -->
    <!-- Enesta parte del codigo se crean los menus para CATEGORIAS y PRODUCTOS -->
      <div class="row-fluid">
        <div class="col-md-2">
          <div class="panel panel-primary">
            <div class="panel-heading">
              Categorias
            </div>
            <!-- Cuerpo para el DIV de CATEGORIAS -->
            <!-- LLENAMOS PANEL DE CATEGORIAS -->
              <ul class="list-group">
                <?php
                  $conexion->llenar_categorias("SELECT COUNT(categoria) AS contador, categoria FROM productos GROUP BY categoria");
                ?>
              </ul>
          </div>
        </div>

        <!-- Parte para PRODUCTOS -->
      <div class="col-md-10">
        <div class="panel panel-primary">
          <div class="panel-heading">Productos</div>
            <!-- Cuerpo para el DIV de PRODUCTOS -->
            <div class="panel-body">
              <div class="row">
                <div class="row">
                <!-- SE CREA LA LISTA DE PRODUCTOS -->
                <?php
                  $conexion->vista_productos("SELECT * FROM productos");
                ?>
                </div>
            </div>
          </div>
          <!-- Creamos los botones para las paginas -->
          <center>
            <ul class="pagination">
              <li><a href="#"><span class="glyphicon glyphicon-menu-left"></span></a></li>
              <li><a href="#">1</a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#">5</a></li>
              <li><a href="#"><span class="glyphicon glyphicon-menu-right"></span></a></li>
            </ul>
          </center>
        </div>
      </div>
    <!-- </div> -->

    <!-- Footer Contenedor -->
      <div class="container text-center">
        <hr>
        <h2><span class="label label-primary"><span>  Sucursales </span></span></span></h2>
        <hr>
        <div class="row">
          <div class="col-lg-12">
            <div class="col-md-3">
              <ul class="nav nav-pills nav-stacked">
                <li><a href="#">Guadalara</a></li>
                <li><a href="#">Aguascalientes</a></li>
              </ul>
            </div>
            <div class="col-md-3">
              <ul class="nav nav-pills nav-stacked">
                <li><a href="#">Hermosillo</a></li>
                <li><a href="#">Veracruz</a></li>
              </ul>
            </div>
            <div class="col-md-3">
              <ul class="nav nav-pills nav-stacked">
                <li><a href="#">Monterrey</a></li>
                <li><a href="#">Leon</a></li>
              </ul>
            </div>
            <div class="col-md-3">
              <ul class="nav nav-pills nav-stacked">
                <li><a href="#">CDMX</a></li>
                <li><a href="#">Puebla</a></li>
              </ul>
            </div>
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-lg-12">
            <ul class="nav nav-pills nav-justified">
                <li><a href="/">© 2016 GameOn.</a></li>
            </ul>
          </div>
        </div>
      </div>

    <script src="../Boostrap/js/jquery.js"></script>
    <script src="../Boostrap/js/bootstrap.js"></script>
  </body>
</html>
<?php
?>
