<?php
	require_once './classes/crud.php' ;
	//INSERT TO DATABASE  
    $insert_data = new CRUD() ;
    if(isset($_POST['submit']))
    {
        $insert = $insert_data->insert_data($_POST);
    }
?>
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
        <?php
                //INSERT TO DATABASE  
                    if(isset($insert))
                    {
                        echo $insert ;
					} 
					else
					{
						echo "" ;
					}          
        ?>
        <div id="form">   
			<form action="" method="post" name="add-form">
				<div class="row">
					<p>Username</p>
					<input type="text" name="username" value="">
				</div>
				<div class="row">
					<p>Email</p>
					<input type="text" name="email" value="">
				</div>
				<div class="row">
					<p>Password</p>
					<input type="password" name="password" value="">
				</div>
				<div class="row">
					<p>Birthday</p>
					<input type="data" id="birthday" name="birthday" value="">
				</div>
				<div class="row">
					<p>Group</p>
                    <input type="text" name="group" value="">

				</div>
				<div class="row">
					<p>Status</p>
                    <input type="text" name="status" value="">
				</div>

				<div class="row">
					<p>Ordering</p>
					<input type="text" name="ordering" value="">
				</div>
				
				<div class="row">
					<input type="submit" value="Save" name="submit">
					<input type="button" value="Cancel" name="cancel" id="cancel-button">
					<input type="hidden" value="" name="token" />
				</div>
												
			</form>    
        </div>
        
    </div>
</body>
</html>