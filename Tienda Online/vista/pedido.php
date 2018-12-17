<?php
include "../modelo/conexion.php";
include "../controlador/producto.php";
session_start();
$pedido = new conexion();
$total = $_SESSION['total'];
$id_pedido = $_SESSION['id'];
$pedido->insertar("INSERT INTO pedidos (total, usuarios_id_usuario)VALUES('$total','$id_pedido')");
$id = $pedido->conexion->insert_id;
$carrito = unserialize(serialize($_SESSION['carrito']));


for ($i=0; $i < count($carrito) ; $i++) {
    $id_producto = $carrito[$i]->id;
    $cantidad = $carrito[$i]->cantidad;
    $pedido->insertar("INSERT INTO productos_has_pedidos (productos_id_producto, pedidos_id_pedido, cantidad) VALUES ('$id_producto','$id','$cantidad')");
}

$id_usuario = $_SESSION['id'];
    $resultado = $pedido->consulta_sql("SELECT * FROM usuarios WHERE id_usuario = '$id_usuario';");
?>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="../Boostrap/css/bootstrap.css">
        <title>Pedido</title>
    </head>
    <body>

        <div class="alert alert-success" role="alert" style="text-align: center">
            Pedido Realizado con exito
        </div>

    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading" style="text-align:center">Pedido: <?php echo $id; ?></div>
            <table class="table">
                <tr>
                    <th style="text-align: center">Nombre</th>
                    <th style="text-align: center">Correo</th>
                </tr>
                <tr>
                    <td style="text-align: center"><?php echo $resultado['nombre']; ?></td>
                    <td style="text-align: center"><?php echo $resultado['correo']; ?></td>
                </tr>
                <tr>
                    <th style="text-align: center">Telefono</th>
                    <th style="text-align: center">Codigo Postal</th>
                </tr>
                <tr>
                    <td style="text-align: center"><?php echo $resultado['telefono']; ?></td>
                    <td style="text-align: center"><?php echo $resultado['cp']; ?></td>
                </tr>
                <tr>
                    <th style="text-align: center">Municipio</th>
                    <th style="text-align: center">Jalisco</th>
                </tr>
                <tr>
                    <td style="text-align: center"><?php echo $resultado['municipio']; ?></td>
                    <td style="text-align: center"><?php echo $resultado['estado']; ?></td>
                </tr>
            </table>
        </div>
    </div>

    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading" style="text-align:center">Productos</div>
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
        </div>
    </div>
    <center><a class="btn btn-primary" href="../vista/home.php"> Regresar al home </a></center>
    <hr>
    <?php  unset($_SESSION['carrito']);?>
        <script src="../Boostrap/js/jquery.js"></script>
        <script src="../Boostrap/js/bootstrap.js"></script>
    </body>
</html>
