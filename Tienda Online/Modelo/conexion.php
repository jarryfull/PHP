<?php

class conexion
{
    public $conexion = "";
    private $server = "localhost";
    private $usuario = "root";
    private $pass = "";
    private $db = "Tienda";
    private $user;
    private $password;

    public function __construct()
    {
        $this->conexion = new mysqli($this->server, $this->usuario, $this->pass, $this->db);

        if ($this->conexion->connect_errno)
        {
            die("Fallo al tratar de conectar con MySQL");
        }
        $this->conexion->set_charset("utf8");
    }

    public function cerrar_sesion()
    {
      $this->conexion->close();
    }

    public function iniciar_sesion($usuario, $pass)
    {
      $this->user = $usuario;
      $this->password = $pass;

      $query = "SELECT id_usuario, nombre, usuario, contrasena, correo FROM usuarios WHERE usuario = '".$this->user."' AND contrasena = '".$this->password."'";

      $consulta = $this->conexion->query($query);

      if ($raw = mysqli_fetch_array($consulta))
      {
          session_start();

          $_SESSION['id'] = $raw['id_usuario'];
          $_SESSION['nom'] = $raw['nombre'];
          header("location:../vista/home.php");
      }
      else
      {
          header("location:../vista/login.php");
      }
    }

    public function insertar($sql)
    {
        $resultado = $this->conexion->query($sql);
    }

    public function consulta_sql($consulta)
    {
      $resultado = $this->conexion->query($consulta);

      if ($raw = mysqli_fetch_array($resultado))
      {
        return $raw;
      }
      else
      {
        echo "Error en la Consulta: ".$consulta;
      }
    }

    public function vista_productos($sql)
    {
      $resultado = $this->conexion->query($sql);
      while ($contador = mysqli_fetch_array($resultado)) {
        ?>

        <div class="col-sm-6 col-md-4">
          <div class="thumbnail">
            <img src="../imagenes/productos/<?php echo $contador['imagen'];?>" width="150" height="1" alt="<?php echo $contador['imagen'] ?>">
            <div class="caption">
              <!-- IMPRIME TITULO Y DESCRIPCION -->
              <h4> <?php echo $contador['titulo']; ?> </h4>
              <div class="alert alert-info" role="alert">
                <strong>Precio: </strong> <?php echo "$".$contador['precio'].".00 MX"; ?>
              </div>

              <p> <?php echo substr($contador['descripcion'],0,40);?> </p>
              <div class="input-group">
                <!-- CREACION DE BOTONES PARA AÑADIR AL CARRITO -->
                <!-- <input type="text" class="form-control" aria-label="..."> -->
                <div class="input-group-btn">
                  <?php if($contador['stock'] != 0){?>
                    <center>
                        <button type="button" class="btn btn-default disabled" aria-label="Help"><span class="badge"><?php echo $contador['stock']?></span></span></button>
                        <a href="../controlador/anadir.php?id=<?php echo $contador['id_producto']?>"  class="btn btn-primary">Añadir</a>
                    </center>
                    <?php
                  }
                  else {?>
                    <center>
                        <button type="button" class="btn btn-default disabled" aria-label="Help"><span class="badge"><?php echo $contador['stock']?></span></span></button>
                        <a href="../controlador/anadir.php?id=<?php echo $contador['id_producto']?>" class="btn btn-primary disabled">Añadir</a>
                    </center>
                    <?php
                  }
                  ?>
                </div>
              </div>
            </div>
          </div>
        </div>

        <?php
      }
    }

    public function llenar_categorias($sql)
    {
      $resultado = $this->conexion->query($sql);
      while ($contador = mysqli_fetch_array($resultado))
      {?>
        <a href="../vista/construccion.php"  class="list-group-item"> <?php echo $contador['categoria']; ?> <span class="badge"> <?php echo $contador['contador'];?> </span></a>
       <?php
      }
    }

}
?>
