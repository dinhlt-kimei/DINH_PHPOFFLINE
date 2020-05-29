<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/jquery-ui.css" />
	<title></title>
	<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
	<script type="text/javascript" src="js/my-js.js"></script>
	<script type="text/javascript" src="js/jquery-ui.js"></script>
</head>
<body>
	<div id="wrapper">
    	<div class="title"></div>
        <div id="form">   
			<form action="" method="post" name="add-form">
            <?php
                if(isset($_GET['add']))
                {
                    require_once 'action/addData.php' ;
                    echo    '<div class="row">
                            <p>Username</p>
                            <input type="text" name="username" value="">
                            </div>
            
                            <div class="row">
                                <p>Status</p>
                                <input type="text" name="status" value="">
                            </div>
                    
                            <div class="row">
                                <input type="submit" value="Save" name="submit">
                                <input type="button" value="Cancel" name="cancel" id="cancel-button">
                                <input type="hidden" value="" name="token" />
                            </div>' ;
                }
                else
                {
                    require_once 'action/getItemsEdit.php' ;
                    echo '
                    <div class="row">
					    <p>Username</p>
                    <input type="text" name="username" value="  '.$username.'">
                    <input type="hidden" name="id" value="  '.$id.'">    
                    </div>
                    <div class="row">
					    <p>Status</p>
                    <input type="text" name="status" value="'.$status.' ">
				    </div>	
				    <div class="row">
                        <input type="submit" value="Update" name="submitUpdate">
                        <input type="button" value="Cancel" name="cancel" id="cancel-button">
                        <input type="hidden" value="" name="token" />
                    </div> ' ;
                    require_once 'update.php' ;
                }           
            ?>    
				
												
			</form>    
        </div>
        
    </div>
</body>
</html>