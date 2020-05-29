<?php error_reporting(0);  ?>  
<?php  session_start() ;?>
	<form action="" method="GET">
		<div style="width: 88%;height: 20px;padding: 20px;margin: auto;"> 
				<input style=" width: 650px;height: 21px;margin-left: 180px;" type="text" name="search"  value="<?php echo $_GET['search'] ; ?>">
				<input style="height: 27px;" type="submit" value="Search" >
		</div>       
		

</form>
