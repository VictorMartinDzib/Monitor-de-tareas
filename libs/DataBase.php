<?php
    class DataBase extends PDO{
        private static $instance = null;

        //contructor
        public function __contruct($server, $username, $password, $option = []){
            parent::__contruct($server, $username, $password, $option);
        }
        public static function getIntance(){
            if(is_null(self::$instance)){
                self::$instance = new DataBase('mysql:host=127.0.0.1;dbname=monitor', 'root', '');
                self::$instance -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
            return self::$instance;
        }
    }

?>