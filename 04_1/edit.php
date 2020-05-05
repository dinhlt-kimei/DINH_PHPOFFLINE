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
 
    $configs = parse_ini_file('config.ini') ;      // truy xuất vào config.ini
    $swapArr = explode("|",$configs['extension']); // đổi chuổi extension thành mảng

    require_once('functions.php') ;
    $id = $_GET['id'] ;
    $filename = "./files/$id.txt" ;
    
    $content = file_get_contents($filename);
    $content = explode("||",$content) ;
    $title          = $content[0];
    $description    = $content[1];
    $imageOld       = $content[2];
    $fileImage      = "./image/$imageOld" ;
    $content2 = file_get_contents($fileImage);
   
    $flag = false;
    if(isset($_POST['title']) && isset($_POST['description'])  && isset($_FILES['file-upload']) )
    {
        $title        = $_POST['title']       ;
        $description  = $_POST['description'] ;
        $fileUpLoad   = $_FILES['file-upload'];
        $imageName    = $fileUpLoad['name'];
        $imageSize    = $fileUpLoad['size'];
        $fileName     = randomString($imageName,5);
        
        //==========ErrorImage ====================== 
        $errorImage = "";
        if(checkEmpty($imageName)) $errorImage  = '<p class = "error">Vui lòng chọn ảnh </p> ';
        $extension  = checkExtension($imageName,$swapArr);
        if($extension == false)    $errorImage .= '<p class = "error">Vui lòng chọn đúng file ảnh </p> ';
        $size       =  checkSize($imageSize,$configs['min_size'],$configs['max_size']) ;      
        if($size == false)         $errorImage .= '<p class = "error">Vui lòng chọn size ảnh hợp lệ </p> ';

        //===========Error Title====================
        $errorTitle  = '';
        if(checkEmpty($title))           $errorTitle    = ' <p class = "error">Vui lòng điền vào thông tin</p> ';
        if(checkString($title,5,100))     $errorTitle  .= ' <p class = "error">Tiêu đề dài từ 5 đến 100 ký tự</p> ';
        //==========Error Description=============== 
        $errorDescription   = '';
        if(checkEmpty($description))            $errorDescription   = ' <p class = "error">Vui lòng điền vào thông tin</p> '; ;
        if(checkString($description,50,1000))   $errorDescription  .= ' <p class = "error">Tiêu đề dài từ 50 đến 1000 ký tự</p>' ;
        // Khi người dùng nhập đúng điều kiện
        if($errorTitle == '' && $errorDescription == ''  && $errorImage == ''  )
        {
            
            if(!checkEmpty($imageName) && $extension == true && $size == true)
            {
                $id = $_GET['id'] ;
                $filename = "./files/$id.txt" ;
                $content = file_get_contents($filename);
                $content = explode("||",$content) ;
                $title          = $content[0];
                $description    = $content[1];
                $image          = $content[2];
                $flag = false ;
                @unlink("./image/$image");
                                
                if($extension == true && $size == true)
                {
                    $title        = $_POST['title']       ;
                    $description  = $_POST['description'] ;
                    $fileUpLoad   = $_FILES['file-upload'];
                    $imageName    = $fileUpLoad['name'];
                 
                    $fileName     = randomString($imageName,5);
                    @move_uploaded_file($fileUpLoad['tmp_name'],'./image/'.$fileName.'') ;
                    $data =  $title .'||'. $description .'||'. $fileName;
                    $filename = './files/' .$id . '.txt';
                    if(file_put_contents($filename,$data))
                    {
                        $title = '';
                        $description = '';
                        $fileName = '';
                        $flag = true ;
                    }          
                }
            }
            
            
        }    
        
    }
    
?>


	<div id="wrapper">
    	<div class="title">PHP FILE - EDIT</div>
        <div id="form">        
			<form action="#" method="post" name="add-form"  enctype="multipart/form-data">
				<div class="row">
					<p>Title</p>
                    <input type="text" name="title" value="<?php  echo $title ; ?>">
                    <?php if(isset($_POST['title'])) echo $errorTitle ; ?>       
                </div>
                <div class="row">
					<p>Image</p>
                    <input type="file" name="file-upload" value="<?php echo $imageOld ; ?>"/>
                    <p class ="image"><img src="./image/<?php echo $imageOld ;?>" alt="#" style="width:100px ; height:70px"></p>
                    <?php if(isset($_FILES['file-upload'])) echo $errorImage; ?>                  
				</div>				
				<div class="row">
					<p>Description</p>
                    <textarea name="description" rows="5" cols="100"> <?php  echo $description ;?> </textarea>
                    <?php if(isset($_POST['description'])) echo $errorDescription ; ?>
				</div>
				<div class="row">
					<input type="submit" value="Save"   name="submit">
                    <input type="button" value="Cancel" name="cancel" id="cancel-button">   
				</div>
               <?php
                   if($flag == true) echo '<div class="row"><p>Dữ liệu đã cập nhập thành công</p></div>' 
                ?>					
			</form>    
        </div>
        
    </div>
</body>
</html>