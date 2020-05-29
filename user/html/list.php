<?php error_reporting(0); ?>
<?php
    require_once './classes/userModel.php';
    $get_listItems = new userModel() ;
    $params = $_GET['search'] ;
    if (isset($_GET['page'])) {
        $page = $_GET['page'];
    } else {
        $page = 1;
    }

    $show_listItems = $get_listItems->listItems($params,$page);
    if($show_listItems)
    {
        $i = 0;
        while($result = $show_listItems->fetch_assoc())
        {
            $i++ ;   
            $id = $result['id'];
            $name = $result['username'];
            $status = $result['status_user'];
        ?>      
            <tbody>							
                <td style="width:2%"  class="no"><input type="checkbox" name="checkbox[]" value="<?php echo $id ;?>" /></td>
                <td><?php echo $i ;?></td>
                <td><?php echo $name ;?></td>
                <td>
                    <?php
                        if($status == '0')
                        { 
                            echo '<a style="text-decoration:none;" href="?id='.$id.'&status='.$status.'">Inaction</a>' ;
                        } 
                        else
                        {
                            echo '<a style="text-decoration:none;" href="?id='.$id.'&status='.$status.'">Action</a>' ;
                        }
                    ?>
                </td>
                    <td><a href="form.php?editid=<?php echo $id ?>">Edit</a> <a href="delete.php?id=<?php echo $id ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa không ?') ;" >Delete</a></td>
                <?php
                        }
                    }                        
                ?>	
    	</table>		
	    </div>
	        	<input type="hidden" value="" name="token" />
	    </form>      		
        </div>    


   