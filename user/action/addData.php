<?php
    require_once './classes/userModel.php' ;
    if(isset($_POST['submit']))
    {
        $insert = new userModel();

        $insertData = $insert->insertItems($_POST);
        if($insertData)
        {
            echo $insertData ;
        }

    }

?>