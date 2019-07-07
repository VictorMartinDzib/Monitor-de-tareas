
<?php
    class Usuario{
        public static $nombreUser = null;
        private $emailUser;
        private $password;
        public static $id_user;
        private $estatus_user;
        private static $instancia = null;

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
