<?php

require_once ROOT_PATH.'/libs/Model.php';

    class Tarea extends Model{
        private $title;
        private $start_fech;
        private $end_fech;
        private $restDays;
        private $assignedBy;
        private $assignedTo;
        private $description;
        private $status;

        public function setTitle($val)
        {
            $this -> title = $val;
        }
        public function setStartF($val)
        {
            $this -> start_fech = $val;
        }
        public function setEndF($val)
        {
            $this -> end_fech= $val;
        }
        public function setrestD($val)
        {
            $this -> restDays = $val;
        }
        public function setAssignedBy($val)
        {
            $this -> assignedBy = $val;
        }
        public function setAssignedTo($val)
        {
            $this -> assignedTo = $val;
        }
        public function setDescription($val)
        {
            $this -> description= $val;
        }
        public function setStatus($val)
        {
            $this -> status = $val;
        }
        
        public function setValues(){
            $values = array(
                $this->title,
                $this -> start_fech,
                $this -> end_fech,
                $this -> assignedBy,
                $this -> assignedTo,                
                $this -> description,
                $this -> restDays,
                $this -> status 
            );
            Model::insert($values);
        }
    }
?>