<?php
    session_start();
    session_destroy();
?>

 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>Registro</title>
   </head>
   <body>

      <section id="registro">
          <center>
                <h1>Registro</h1>
                <br><br>
                <div class="regitro">
                  <form action="../controlador/registro.php" method="POST">
                    <fieldset>
                      <legend> Formulario de Registro </legend>
                      <p>
                        <input type="text" name="nombre" placeholder="Nombre" title="Necesita un Nombre" required>
                      </p>
                      <p>
                        <input type="text" name="usuario" placeholder="Usuario" title="Se necesita un usuario" required>
                      </p>
                      <p>
                        <input type="password" name="password" placeholder="Contraseña" title="Se necesita una contraseña" required>
                      </p>
                      <p>
                        <input type="password" name="password2" placeholder="Confirmar contraseña" title="Se necesita confirmar contraeña" required>
                      </p>
                      <p>
                        <input type="email" name="correo" placeholder="Correo" title="Se necesita un correo" required>
                      </p>
                      <p>
                        <input type="submit" value="Entrar">
                        <input type="reset" value="Limpiar">
                      </p>
                      <p>
                        <a href="../vista/login.php">
                        Iniciar Sesion
                      </p>
                    </fieldset>
                  </form>
                </div>
          </center>
      </section>

   </body>
 </html>
