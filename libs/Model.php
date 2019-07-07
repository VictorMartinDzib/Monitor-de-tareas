<?php 
//require_once ROOT_PATH.'/libs/DataBase.php';
require_once('libs/DataBase.php');

    abstract class Model{
        protected static $table = null;

        public static function all(){
            $pdo = DataBase::getInstance();
            $sql = 'SELECT * FROM ' . static::$table;
            $resultQuery = $pdo -> query($sql);

            return $resultQuery -> fetchAll(PDO::FETCH_OBJ);
        }
    }

?>