<?php 
//require_once ROOT_PATH.'/libs/DataBase.php';

require_once ROOT_PATH.'/libs/DataBase.php';

    abstract class Model
    {
        public static function all($numT, $idUser){
            //require_once('DataBase.php');
            $pdo = DataBase::getIntance();
            //$sql = 'CALL generarTabla' . $numT . '(:id)';
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
            for($i = 1; $i <= 8; $i++){
                $insertValues -> bindParam(':val' . $i, $values[$i-1]);
            }
            $insertValues -> execute();
        }
    }

?>