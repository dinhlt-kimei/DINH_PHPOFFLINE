<?php
    class App{       
        private $controller ='Home' ;
        private $action     = 'List'  ;
        private $params     =[];

        public function __construct()
        {
            $arr = $this->checkUrl();
            // Xu Ly Controller
            if(file_exists("./controllers/".$arr[0].".php"))
            {
                require_once "./controllers/".$arr[0].".php" ;
                $this ->controller = $arr[0] ;
                unset($arr[0]);
            } 
            require_once "./controllers/".$this->controller.".php" ;
            $this->controller = new $this->controller ; //
          //  Xu Ly Action
            if(isset($arr[1]))
            {     
                if( method_exists( $this->controller , $arr[1]) )
                {   
                    $this->action = $arr[1] ;               
                }
                unset($arr[1]);
            }
            // Xu ly Params 
            $this->params = $arr?array_values($arr) :[] ;
            call_user_func_array([$this->controller,$this->action], $this->params);        
        }
        public function checkUrl()
        {
            if(isset($_GET['url'])){
                return explode("/",filter_var(trim($_GET['url'],"/"))) ;
            }  
 
        }
    }
?>