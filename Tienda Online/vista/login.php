<?php
    session_start();
    session_destroy();
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login - Tienda</title>
    <link href="css/login.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="../Boostrap/css/bootstrap.css">

  </head>
  <body>

    <section id="formulario">
          <center>
            <h1>Tienda Online</h1>
            <br><br>
            <div class="login">
              <form action="../controlador/login.php" method="POST">
                <fieldset>
                  <legend>Iniciar Session</legend>
                  <p>
                    <input type="text" name="usuario" placeholder="Usuario" title="Se necesita un usuario" required>
                  </p>
                  <p>
                    <input type="password" name="password" placeholder="Contraseña" title="Se necesita una contraseña" required>
                  </p>
                  <p>
                    <input type="submit" value="Entrar">
                    <input type="reset" value="Limpiar">
                  </p>
                  <p>
                    <a href="../vista/registro.php">
                    Crear Cuenta
                  </p>
                </fieldset>
              </form>
            </div>
          </center>
    </section>
  </body>
</html>
