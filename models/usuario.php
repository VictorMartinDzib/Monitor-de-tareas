
<?php

require_once ROOT_PATH . '/libs/Model.php';
require_once ROOT_PATH . '/libs/DataBase.php';

    class Usuario extends Model
    {
        private $pass;
        private $user;
        private $conn;
        
        public function __construct($username, $password)
        {
            $this -> user = $username;
            $this -> pass = $password;
            //Obteniendo conexion
            
            $this -> conn = DataBase::getIntance();
        }    

        public function login(){
            
            //Consulta
            $consulta = $this -> conn -> prepare("SELECT * FROM usuarios WHERE nombreUsuario=:usuario AND contrasenia=:contra");

            //Asignando valor a los parametros
            $consulta -> bindValue(":usuario", $this -> user);
            $consulta -> bindValue(":contra", $this -> pass);
            $consulta -> execute();

            //Guardando resultado
            $numero_registro = $consulta -> rowCount();

            //Validando si existe resultado
            if($numero_registro != 0)
            {
                return true;
            }else{
                return false;
            }
        }
        
    }

?>
