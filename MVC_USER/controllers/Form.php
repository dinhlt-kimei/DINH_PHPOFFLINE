<?php
    class Form extends Controller{
        
        function Add(){
            // Models
            $add = $this->Models("userModels") ;
           // Views
            $this->Views("add",[
                "adduser" => $add->Add(),
            ]) ;

        }
        function Edit(){
            
        }
    }
?>