<?php 
        require_once './classes/crud.php' ;
		if(isset($_POST['checkbox'] ))
        {
            
            foreach($_POST['checkbox'] as $id)
            {
                $muty       = new CRUD () ;
                $mutyDelete = $muty -> mutyDelete($id) ;

            } 
            if(isset($mutyDelete))
            {
                header('location:index.php') ;
            }
            
            $flag = true ;    
        }
   


?>        
    
