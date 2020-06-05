<?php
    class Controller{

        public function Models($models)
        {
            require_once "./models/".$models.".php" ;
            return new $models ; 
        }

        public function Views($views, $data=[])
        {
            require_once "./views/".$views.".php " ;
    
        }
    }

?>