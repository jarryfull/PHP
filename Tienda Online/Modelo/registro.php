<?php

class registro
{
    private $conexion = "";
    private $server = "localhost";
    private $userDB = "root";
    private $passDB = "";
    private $db = "Tienda";
    private $nombre;
    private $usuario;
    private $contraena;
    private $contraena2;
    private $correo;

    public function __construct()
    {
        $this->conexion = new mysqli($this->server,$this->userDB,$this->passDB,$this->db);

        if ($this->conexion->connect_errno)
        {
            die("Fallo al tratar de conectar con MySQL");
        }

    }

    public function cerrar_sesion()
    {
      $this->conexion->close();
    }

    public function registrar_usuario($name,$user,$pass,$pass2,$mail)
    {
        $this->nombre = $name;
        $this->usuario = $user;
        $this->contrasena = $pass;
        $this->contrasena2 = $pass2;
        $this->correo = $mail;

        if ($this->contrasena === $this->contrasena2)
        {
          $query = "SELECT 1 FROM usuarios WHERE usuario = '".$this->usuario."' OR correo = '".$this->correo."'";
          $consulta = $this->conexion->query($query);

          if ($raw = mysqli_fetch_array($consulta))
          {
              echo "Usuario o Correo, Ya se encuentran registrados";
          }
          else
          {
              $queryRegistro = "INSERT INTO usuarios(nombre,usuario,contrasena,correo) VALUES('".$this->nombre."','".$this->usuario."','".$this->contrasena."','".$this->correo."');";
              // echo $query . "<br>";
              $consulta = $this->conexion->query($queryRegistro);
              // echo gettype($registro);
              echo "Usuario Registrado";
          }
        }
        else
        {
            echo "Error al registrar usuario, Revisar los datos...";
        }
    }
}
?>
