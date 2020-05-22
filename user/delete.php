<?php

    require_once 'classes/crud.php' ;
    if(!isset($_GET['id']) || $_GET['id'] == NULL)
    {
        header('location:index.php');
    }
    else
    {
        $id = $_GET['id'] ;
    }

    $delete = new CRUD() ;

    $delete_data = $delete->delete_data($id) ;

    if(isset($delete))
    {
        echo $delete_data ;
    }


?>