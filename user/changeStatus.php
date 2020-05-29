<?php
    if(isset($_GET['id']) && isset($_GET['status']))
    {
         $id = $_GET['id'] ;
         $status = $_GET['status'] ;   
         $change= new userModel() ;
         $changeStatus = $change->changeStatus($id,$status);      
    }
    
?>