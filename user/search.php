<?php
    require_once 'classes/crud.php' ;
    $sr = new CRUD() ;
    if(isset($_POST['search']))
    {
        $search = $_POST['search'] ;

        $search_data = $sr-> search_data($search) ;

        if(isset($search_data))
        {
            $i = 0;
            while($result = $search_data->fetch_assoc())
            {
                $i++;
            ?>
        <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
            <html>
            <head>
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
            <link rel="stylesheet" type="text/css" href="css/style.css">
            <title>Manage User</title>
            <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
            <script type="text/javascript" src="js/my-js.js"></script>
            </head>
            <body>
                <div id="wrapper">
                    <div class="title">Search</div>
                        <div class="list"> 
                            <form action="#" method="post" name="main-form" id="main-form">
                                <div class="row" style="text-align: center; font-weight: bold;">
                                    <table>
                                        <thead>	
                                            <th style="width:6%" class="id">ID</th>
                                            <th style="width:4%" class="name">User Name</th>
                                            <th style="width:12%" class="id">Birthday</th>
                                            <th style="width:7%" class="size">Status</th>
                                            <th style="width:6%" class="size">Ordering</th>
                                            <th style="width:8%" class="size">Group</th>
                                        </thead>
                                        <tbody>	
                                            <td> <?php echo $i ?> </td>
                                            <td> <?php echo $result['username'] ?>  </td>
                                            <td> <?php echo $result['birthday'] ?> </td>
                                            <td>
                                                <?php 
                                                    if($result['status_user'] == 1){ 
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
                                        </tbody>	
                                    </table>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>  
            </body>
        </html>            
            <?php               
            }
        }
    }
?>
