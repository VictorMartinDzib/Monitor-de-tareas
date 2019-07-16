<?php 

require_once ROOT_PATH.'/libs/DataBase.php';

    abstract class Model
    {


        public static function allTask($idT){
            $pdo = DataBase::getIntance();
            $sql = "SELECT * FROM tareas WHERE id_tarea = '$idT'";
            $resultQuery = $pdo -> query($sql);
            return $resultQuery -> fetch();
        }

        public static function procedure($numT, $idUser){
            //Instancia unica de Database
            $pdo = DataBase::getIntance();
            
            //Consulta
            $resultQuery = $pdo -> prepare('CALL generarTabla' . $numT . '(:id)');
            $resultQuery -> bindParam(':id', $idUser);
            $resultQuery -> execute();

            return $resultQuery -> fetchAll(PDO::FETCH_OBJ);
        }

        public static function insert($values=[]){
            $pdo = DataBase::getIntance();
            $sql = 'INSERT INTO tareas(titulo, fecha_asig, fecah_venc, id_asignador, id_user_asignado, 
            decripcion, dias_faltantes, estatus) VALUES (:val1, :val2, :val3, :val4, :val5, :val6,
            :val7, :val8)';

            $insertValues = $pdo -> prepare($sql);

            if(is_array($values))
            {
                for($i = 1; $i <= 8; $i++)
                {
                $insertValues -> bindParam(':val' . $i, $values[$i-1]);
                }
                $insertValues -> execute();
            }
        }

        public static function getByParam($param){
            $pdo = DataBase::getIntance();
            //$sql = 'SELECT $column FROM $table WHERE nombreUsuario = $param';
            $sql = "SELECT nombre_Apellido FROM usuarios WHERE nombreUsuario = '$param'";
            $searchValue = $pdo -> query($sql);
            $name = $searchValue -> fetch();
            return $name['nombre_Apellido'];
        }

        public static function getUserList($param){
            $pdo = DataBase::getIntance();
            $sql = "SELECT nombre_Apellido, id_usuario FROM usuarios WHERE NOT nombreUsuario = '$param' AND estatus = 1";
            $consulta = $pdo -> prepare($sql);
            $consulta -> execute();
            return $consulta -> fetchAll(PDO::FETCH_OBJ);
        }

        public static function getID($user){
            $pdo = DataBase::getIntance();
            $sql = "SELECT id_usuario FROM usuarios WHERE nombreUsuario='$user'";
            $searchValue = $pdo -> query($sql);
            $id = $searchValue -> fetch();
            return $id['id_usuario'];
        }
    }

?>