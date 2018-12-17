<?php include "../controlador/producto.php"; ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Carrito</title>
    <link rel="stylesheet" type="text/css" href="../Boostrap/css/bootstrap.css">
  </head>
  <body>
<?php
    include "nav.php";
 ?>
 <div class="container">


                <?php if (count($_SESSION['carrito'])){?>
        <div class="panel panel-default">
            <div class="panel-heading" style="text-align:center">Carrito</div>
                <table class="table">
                    <tr>
                        <th style="text-align: center">ID</th>
                        <th>Nombre</th>
                        <th style="text-align: center">Precio</th>
                        <th style="text-align: center">Cantidad</th>
                        <th style="text-align: center">Sub Total</th>
                        <th style="text-align: center">Borrar</th>
                    </tr>
                    <?php

                    $carrito = unserialize(serialize($_SESSION['carrito']));
                    $suma = 0;
                    $index = 0;

                    for ($i = 0; $i < count($carrito); $i++){
                        $suma += $carrito[$i]->precio * $carrito[$i]->cantidad;
                        ?>
                        <tr>
                            <td style="text-align: center"><?php echo $carrito[$i]->id;?></td>
                            <td><?php echo $carrito[$i]->nombre;?></td>
                            <td style="text-align: center"><?php echo $carrito[$i]->precio;?></td>
                            <td style="text-align: center"><?php echo $carrito[$i]->cantidad;?></td>
                            <td style="text-align: center"><?php echo $carrito[$i]->precio*$carrito[$i]->cantidad;?></td>
                            <td style="text-align: center"><a href ="../controlador/borrar.php?borrar=<?php echo $i; ?>" onclick="return confirm ('¿Esta seguro?')"><span class="glyphicon glyphicon-trash"></span> </a></td>
                        </tr>
                        <?php
                        $index ++;
                    }
                    $_SESSION['total'] = $suma;
                    ?>
                    <tr>
                        <td colspan ="4" align ="right"></td>
                        <td style="text-align: center; font-weight:bold">Total</td>
                        <td style="text-align: center"><?php echo $suma; ?></td>
                    </tr>

                </table>

            </div>
            <br>
            <div class="row-fluid">
                <div class="col-sm-6">
                    <center>
                        <a class="btn btn-primary" href="../vista/home.php"> Seguir Comprando</a>
                    </center>
                </div>
                <div class="col-sm-6">
                    <center>
                        <a class="btn btn-primary" href="../vista/pedido.php"> Realizar Pedido</a>
                    </center>
                </div>
            </div>
         <?php  }
         else {
             echo "";
             ?>
             <div class="container">
                 <div class="alert alert-warning" role="alert" style="text-align: center">
                     <img src="../imagenes/carrito.png" alt="Carrito Vacio">
                     <hr>
                     <p>Tu carrito esta vacio deberias de intentar comprar algo</p>
                     <hr>
                     <a href="../vista/home.php" class="btn btn-warning"> COMPRAR </a>
                 </div>
             </div>
         <?php }

         ?>
</div>

 <script src="../Boostrap/js/jquery.js"></script>
 <script src="../Boostrap/js/bootstrap.js"></script>
 </body>
 </html>
