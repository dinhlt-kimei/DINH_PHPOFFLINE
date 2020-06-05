<?php
        while($row = mysqli_fetch_array($data["DS"]))
        {
                $id = $row['id'];
                $name = $row['username'];
                $status = $row['status_user'];
        ?>      
            <tbody>							
                <td style="width:2%"  class="no"><input type="checkbox" name="checkbox[]" value="<?php echo $id ;?>" /></td>
                <td><?php echo $id ;?></td>
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
                ?>	

        