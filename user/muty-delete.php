<?php 
        require_once './classes/userModel.php' ;
		if(isset($_POST['checkbox'] ))
        {    
            foreach($_POST['checkbox'] as $id)
            {
                $muty       = new userModel () ;
                $mutyDelete = $muty -> mutyDeleteItems($id) ;
            }      
        }
  

?>        
    
