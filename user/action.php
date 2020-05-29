<?php
        require_once 'classes/userModel.php' ;
        session_start() ;
        $action = new userModel() ;
        $params = '1' ;
        $totalAction = $action->countAction($params);
        if($totalAction)
        {
            $i = 0 ;
            $total = 0;
            while($result = $totalAction-> fetch_assoc())
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
                        $total += $i ;   
                        $_SESSION['action'] = $total ;         
                }
                ?>	
    	</table>		
	    </div>
	        	<input type="hidden" value="" name="token" />
	    </form>      		
        </div>    
