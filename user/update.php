<?php
    if(isset($_POST['submitUpdate']))
    {
        $update = new userModel();

        $updateData = $update->updateItems($_POST);
        if($updateData)
        {
            echo $updateData ;
        }
    }
    
?>