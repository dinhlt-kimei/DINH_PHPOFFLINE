<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="css/style.css">
<title>PHP FILE - ADD</title>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('#cancel-button').click(function(){
			window.location = 'index.php';
		});
	});
</script>
</head>
<body>
<?php

    
    $id = $_GET['id'] ;
    $link = realpath("./files/$id.txt") ;
    $content = file_get_contents("./files/$id.txt") ;
    $content = explode('||',$content) ;
    $title       = $content[0];
    $description = $content[1]; 
    $image       = $content[2];

    $flag = false ;
    if(isset($_POST['id']))
    {
        $id= ($_POST['id']) ;
        @unlink("./files/$id.txt");
        @unlink("./image/$image");
        $flag = true;

    }    
?>


	<div id="wrapper">
    	<div class="title">PHP FILE - DELETE</div>
        <div id="form">
            <?php
                    if($flag == false) { 
            ?>    
			<form action="#" method="post" name="add-form">
                <div class="row">
					<p>File</p>
                    <span><?php echo $link ;?> </span>
                    
                </div>
                
                <div class="row">
					<p>Image</p>
                    <input type="file" name="file-upload" value="<?php echo $image ; ?>"/>
                    <p class ="image"><img src="./image/<?php echo $image ;?>" alt="#" style="width:100px ; height:70px"></p>                 
                </div>			
                
				<div class="row">
					<p>Title</p>
                    <input type="text" name="title" value="<?php echo $title ; ?>">
                    
				</div>
				
				<div class="row">
					<p>Description</p>
                    <textarea name="description" rows="5" cols="100"> <?php echo $description ;?> </textarea>
				</div>
				
				<div class="row">
                    <input type="hidden" name="id" value="<?php echo $id ;?>">
					<input type="submit" value="Delete" name="submit">
                    <input type="button" value="Cancel" name="cancel" id="cancel-button">
                    
				</div>					
            </form>
            <?php
                }
                else
                {
                    echo '<p>Dữ liệu đã xóa thành công !! Click vào <a href="index.php" >đây</a> để quay về trang chủ </p>' ;
                }
            ?>    
        </div>
        
    </div>
</body>
</html>
