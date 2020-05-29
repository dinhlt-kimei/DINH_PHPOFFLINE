
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="css/style.css">
<title>Manage User</title>
<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="js/my-js.js"></script>
<style>
	td{		text-align: center;
	}
</style>
</head>
<body>
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
							<th style="width:7%" class="size">Status</th>
							<th style="width:10%" class="action">Action</th>
					</thead>
					
					<?php
						if(isset($_GET['action']))
						{
							if($_GET['action'] == 1)
							{
								require_once './action.php' ;	
							}
							else
							{
								require_once './inaction.php' ;	
							}	
						}
						else
						{
							require_once 'html/list.php'   ;	
						}	
						
					?>

					