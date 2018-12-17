
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Configuracion</title>
        <link rel="stylesheet" type="text/css" href="../Boostrap/css/bootstrap.css">
    </head>
    <body>
        <?php include "nav.php";
        $id = $_SESSION['id'];
        $resultado = $conexion->consulta_sql("SELECT * FROM usuarios WHERE id_usuario = '$id';");
        ?>
        <form action="../controlador/guardar.php" method="POST">
        <div class="container">
            <div class="jumbotron">
                <h1 style="text-align: center">CONFIGURACION</h1>
                <hr>
                <br>
                <div class="row">
                  <div class="col-sm-4" style="padding: 10">
                      <div class="col-sm-12">
                          <div class="input-group">
                              <span class="input-group-addon" id="sizing-addon2"><span class="glyphicon glyphicon-pencil"></span></span>
                              <input name="nombre" type="text" class="form-control" placeholder="Nombre" value="<?php echo $resultado['nombre']; ?>" title="Se Requiere Un Nombre" required>
                          </div>
                      </div>
                      <hr>
                      <hr>
                      <div class="col-sm-12">
                          <div class="input-group">
                              <span class="input-group-addon" id="sizing-addon2"><span class="glyphicon glyphicon-pencil"></span></span>
                              <input name="usuario" type="text" class="form-control" placeholder="Usuario" value="<?php echo $resultado['usuario']; ?>" title="Se necesita un usuario" required>
                          </div>
                      </div>
                      <hr>
                      <hr>
                      <hr>
                      <div class="col-sm-12">
                          <div class="input-group">
                              <span class="input-group-addon" id="sizing-addon2"><span class="glyphicon glyphicon-pencil"></span></span>
                              <input name="correo" type="email" class="form-control" placeholder="Correo" value="<?php echo $resultado['correo']; ?>">
                          </div>
                      </div>
                      <hr>
                      <hr>
                      <hr>
                  </div>

                  <div class="col-sm-4">
                      <div class="col-sm-12">
                          <div class="input-group">
                              <span class="input-group-addon" id="sizing-addon2"><span class="glyphicon glyphicon-pencil"></span></span>
                              <input name="municipio" type="text" class="form-control" placeholder="Municipio" value="<?php echo $resultado['municipio']; ?>" title="Introduce un Municipio" required>
                          </div>
                      </div>
                      <hr>
                      <hr>
                      <div class="col-sm-12">
                          <div class="input-group">
                              <span class="input-group-addon" id="sizing-addon2"><span class="glyphicon glyphicon-pencil"></span></span>
                              <input name="estado" type="text" class="form-control" placeholder="Estado" value="<?php echo $resultado['estado']; ?>" title="Introduce un Estado" required>
                          </div>
                      </div>
                      <hr>
                      <hr>
                      <hr>
                      <div class="col-sm-12">
                          <div class="input-group">
                              <span class="input-group-addon" id="sizing-addon2"><span class="glyphicon glyphicon-pencil"></span></span>
                              <input name="pais" type="text" class="form-control" placeholder="Pais" value="<?php echo $resultado['pais']; ?>" title="Introduce un Pais" required>
                          </div>
                      </div>
                      <hr>
                      <hr>
                      <hr>
                  </div>

                  <div class="col-sm-4">
                      <div class="col-sm-12">
                          <div class="input-group">
                              <span class="input-group-addon" id="sizing-addon2"><span class="glyphicon glyphicon-pencil"></span></span>
                              <input name="cp" type="text" class="form-control" placeholder="Codigo Postal" value="<?php echo $resultado['cp'];?>" title="Introduce un Codigo Postal" required>
                          </div>
                      </div>
                      <hr>
                      <hr>
                      <div class="col-sm-12">
                          <div class="input-group">
                              <span class="input-group-addon" id="sizing-addon2"><span class="glyphicon glyphicon-pencil"></span></span>
                              <input name="telefono" type="text" class="form-control" placeholder="Telefono" value="<?php echo $resultado['telefono']; ?>" title="Introduce un Telefono" required>
                          </div>
                      </div>
                      <hr>
                      <hr>
                      <hr>
                      <div class="col-sm-12">
                          <div class="input-group">
                              <span class="input-group-addon" id="sizing-addon2"><span class="glyphicon glyphicon-pencil"></span></span>
                              <input name="edad" type="text" class="form-control" placeholder="Edad" value="<?php echo $resultado['edad']; ?>" title="Introduce tu Edad " required>
                          </div>
                      </div>
                  </div>
                </div>
                <hr>
                <center><input class="btn btn-primary btn-lg" type="submit" value="Guardar"></center>
            </div>
        </div>
        </form>
    </body>
    <script src="../Boostrap/js/jquery.js"></script>
    <script src="../Boostrap/js/bootstrap.js"></script>
</html>
