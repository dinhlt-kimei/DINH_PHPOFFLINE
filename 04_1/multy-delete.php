<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="css/style.css">
<title>PHP FILE</title>
<script type="text/javascript" src="jquery.js"></script>
</head>
<body>
<?php
	
	
	$flag = false ;
	if(isset($_POST['checkbox'])){
		$files = scandir('./files/') ;
		foreach($files  as $keyFile => $valueFile){
		if($valueFile == '.' || $valueFile== '..' || preg_match('#.txt$#imsU',$valueFile) == false) continue;
		$content = file_get_contents("./files/$valueFile") ;
		$content = explode('||',$content);
		@unlink("./files/$valueFile");
		@unlink("./image/$content[2]");
		$flag = true ;
		}
	}
	else
		$flag = false ;
?>
	<div id="wrapper">
    	<div class="title">PHP MUTY - DELETE</div>
        <div id="form">   
			   <?php
				   if($flag == true) echo '<p>Dữ liệu đã được xóa thành công! Click vào <a href="index.php">đây</a> đê quay về trang chủ.</p>' ;
				   if($flag == false) echo '<p>Vui lòng chọn files cần xóa.</p>'
			   ?>       
        </div>
    </div>
</body>
</html>