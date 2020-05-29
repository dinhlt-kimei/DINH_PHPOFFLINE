<?php require_once './classes/userModel.php';?>  
        <?php
                $pagination  = new userModel();
                $num  = $pagination->getPage(); 
        
?>
