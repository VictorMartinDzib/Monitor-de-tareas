<?php
    class View{
        protected $template;
        public function __construct($template=null, $params=[]){
            $this -> setTemplate($template);
            $this -> setParams($params);

            require_once ROOT_PATH . '/libs/AyudaVistas.php';
            $helper=new AyudaVistas();

        }
        public function setTemplate($valTemplate){
            //Ssaber si una variable existe y no es null
            if(isset($valTemplate)){
                $this -> template = $valTemplate;
            }
        }

        public function setParams($valParams){
            if(is_array($valParams)){
                foreach($valParams as $key => $value) {
                    $this -> {$key} = $value;
                }
            }
        }
        public function render(){
            require_once ROOT_PATH . '/views/' . $this -> template . '.php';
        
        }

        public function __toString()
        {
            ob_start();
            $this -> render();
            return ob_get_clean();
        }
        
    }
?>

