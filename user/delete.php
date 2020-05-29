<?php
    require_once 'classes/userModel.php' ;
    if(!isset($_GET['id']) || $_GET['id'] == NULL)
    {
        header('location:404.php');
    }
    else
    {
        $id = $_GET['id'] ;
    }
    $delete = new userModel() ;
    $delete_data = $delete->deleteItems($id) ;
    header('location:index.php') ;
?>