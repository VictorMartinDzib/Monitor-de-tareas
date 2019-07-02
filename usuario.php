
<?php
    class Usuario{
        public static $nombreUser = null;
        private $emailUser;
        private $password;
        public static $id_user;
        private $estatus_user;
        private static $instancia = null;

    
        /*public function iniciarSesion($user, $pass){
            require_once('baseDatos.php');
            $bd = BaseDeDatos::getInstancia();
            $conexion = $bd -> getConexion();


            $id_user = "SELECT id_usuario FROM usuarios WHERE nombreUsuario = '$user' OR correo = '$user' AND contrasenia = '$pass'";


            $consulta = $conexion -> query($id_user);
        }*/
        
        public static function getInstanciaU(){
            if(self::$instancia == null){
                self::$instancia = new Usuario();
            }
            return self::$instancia;
        }

        public function setID($id_usuario){
            $this-> id_user = $id_usuario;
        }

        public function getID($id_usuario){
            return $this-> id_user;
        }
    }

?>
