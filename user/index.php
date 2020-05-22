<?php
		require_once 'muty-delete.php' ;
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="css/style.css">
<title>Manage User</title>
<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="js/my-js.js"></script>
<style>
	td{
		text-align: center;
	}
</style>
</head>
<body>
	<h1 style="text-align: center; color:blue; margin-top:20px;">Search</h1>
	<form action="search.php" method="POST">
		<div style="    border: 1px solid; width: 88%;height: 20px;padding: 20px;margin: auto;"> 
				<input style=" width: 650px;height: 21px;margin-left: 180px;" type="text" name="search" >
				<input style="height: 27px;" type="submit" value="Search" >
		</div>
        
    </form>
	<div id="wrapper">
    	<div class="title">Manage User</div>
        <div class="list"> 
			<form action="#" method="post" name="main-form" id="main-form">
				 <div class="row" style="text-align: center; font-weight: bold;">
				 <table>
					<thead>	
							<th>
									<input type="hidden">
							</th>
							<th style="width:6%" class="id">ID</th>
							<th style="width:4%" class="name">User Name</th>
							<th style="width:12%" class="id">Birthday</th>
							<th style="width:7%" class="size">Status</th>
							<th style="width:6%" class="size">Ordering</th>
							<th style="width:8%" class="size">Group</th>
							<th style="width:10%" class="action">Action</th>
					</thead>
					<?php
					// SELECT DATA
							require_once './classes/crud.php' ;
							$select = new CRUD() ;
							$selectData = $select->select_data() ;					
							if($selectData)
							{
								$flag = true;
								$i = 0;
								while($result = $selectData->fetch_assoc()) 
								{
								
									$i++;	
					?> 
					<tbody>							
							<td style="width:2%"  class="no"><input type="checkbox" name="checkbox[]" value="<?php echo $result['id'] ;?>" /></td>
							<td><?php echo $i ;?></td>
							<td><?php echo $result['username'] ;?></td>
							<td><?php echo $result['birthday'] ;?></td>
							<td>
								<?php
									if($result['status_user'] == '1')
									{ 
										echo "Inactive" ; 
									} 
									else
									{
										echo "Active" ;
									}
								?>
							</td>
							<td><?php echo $result['ordering'] ;?></td>
							<td><?php echo $result['group'] ;?></td>
							<td><a href="edit.php?id=<?php echo $result['id']?>">Edit</a> <a href="delete.php?id=<?php echo $result['id']?>" onclick="return confirm('Bạn có chắc chắn muốn xóa không ?') ;" >Delete</a></td>
							<?php
										}
							}
							else
							{
				
								echo '<h1>DỮ LIỆU RỖNG</h1>' ;
							}				
							?>		
					</tbody>
				</table>		
	            </div>
	            <input type="hidden" value="" name="token" />
	    	</form>      		
		</div>
		<form action="" method="POST">
			<div id="area-button">
				<a href="register.php?action=add">Add User</a>
				<a id="multy-delete" href="#">Delete User</a>
			</div>
		</form>
    </div>
</body>
</html>