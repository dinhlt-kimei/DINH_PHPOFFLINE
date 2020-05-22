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
?>

<?php
    // Update data 
        if(isset($_POST['submitUpdate']))
        {
            $update = new CRUD() ;

            $updata_data = $update->update_data($_POST,$id) ;
            
        }

?>
<?php
            if(isset($updata_data))
            {
                echo $updata_data ;
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
        <div id="form">   
        <?php
            //SELECT EDIT

              $select = new CRUD() ;

              $select_edit = $select ->select_edit($id) ;
              if($select_edit)
              {
                  while($result = $select_edit->fetch_assoc() )
                  {
        ?>
			<form action="" method="post" name="add-form">
				<div class="row">
					<p>Username</p>
					<input type="text" name="username" value="<?php echo $result['username']?>">
				</div>
				<div class="row">
					<p>Email</p>
					<input type="text" name="email" value="<?php echo $result['email']?>">
				</div>
				<div class="row">
					<p>Password</p>
					<input type="password" name="password" value="<?php echo $result['password_user']?>">
				</div>
				<div class="row">
					<p>Birthday</p>
					<input type="data" id="birthday" name="birthday" value="<?php echo $result['birthday']?>">
				</div>
				<div class="row">
					<p>Group</p>
                    <input type="text" name="group" value="<?php echo $result['group']?>">

				</div>
				<div class="row">
					<p>Status</p>
                    <input type="text" name="status" value="<?php echo $result['status_user']?>">
				</div>

				<div class="row">
					<p>Ordering</p>
					<input type="text" name="ordering" value="<?php echo $result['ordering']?>">
				</div>
				
				<div class="row">
					<input type="submit" value="Update" name="submitUpdate">
					<input type="button" value="Cancel" name="cancel" id="cancel-button">
					<input type="hidden" value="" name="token" />
				</div>
												
            </form>   
        <?php
              }
            }
        ?> 
        </div>
        
    </div>
</body>
</html>