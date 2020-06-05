
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/jquery-ui.css" />
	<title></title>
	<script type="text/javascript" src="js/jquery-11.0.2.min.js"></script>
	<script type="text/javascript" src="js/my-js.js"></script>
	<script type="text/javascript" src="js/jquery-ui.js"></script>
</head>
<body>
	<div id="wrapper">
    	<div class="title"></div>
        <div id="form">   
			<form action="" method="post" name="add-form">           
                    <div class="row">
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
                    </div>    										
			</form>    
        </div>
        
    </div>
</body>
</html>
