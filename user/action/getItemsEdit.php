<?php
    require_once './classes/userModel.php' ;
        if(!isset($_GET['editid']) || $_GET['editid'] == NULL )
        {
            header('location:404.php');
        }
        else
        {
            $params = $_GET['editid'] ;
            if($params == false)
            {
                header('location:404.php');
            }
        }
        $getEdit = new userModel() ;
        $showItemsEdit = $getEdit->getItems($params);
        if($showItemsEdit)
        {
            while($result = $showItemsEdit->fetch_assoc())
            {
                    $id=        $result['id']; 
                    $username = $result['username'] ;
                    $status   = $result['status_user'] ;              
            }
        }
        if($params > $id)
        {
            header('location:404.php'); 
        }

?>