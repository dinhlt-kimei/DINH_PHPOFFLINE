<?php 
    require_once './libs/database.php';
    require_once './libs/session.php';  
?>
<?php  
    session_start() ;
    class userModel {
        private $db ;
        public function __construct()
        {
            $this->db = new Database()  ;
        }

        public function listItems($params,$page)
        {
           
            $params = mysqli_real_escape_string($this->db->link,$params) ;         
            if($params)
            {
                $query  = "SELECT * FROM user WHERE username LIKE '%$params%' "  ;
                $result= $this->db->select($query);      
                if($result)
                {
                    return $result ;
                }
                else
                {
                    echo '<h2> Không tìm thấy dữ liệu </h2>' ;
                }               
            }
            else
            {
               
                $page =  mysqli_real_escape_string($this->db->link,$page) ;
                $itemsPage = 04 ;
                $offset    = ($page - 1) * $itemsPage ;
                $query  = "SELECT * FROM user LIMIT $offset,$itemsPage" ;
                $result = $this->db->select($query) ;                 
                return $result ;    
            }                          
        }
// INSERT
        public function insertItems($param)
        {
            $name   = mysqli_real_escape_string($this->db->link,$param['username']) ;
            $status = mysqli_real_escape_string($this->db->link,$param['status']) ;
            if($name == "" || $status == "" )
            {
                echo "Vui lòng nhập đủ thông tin" ;
            }
            else
            {
                $query  = "INSERT INTO user(`username`,`status_user`) VALUES ('$name','$status') ";
                $result = $this->db->insert($query);
                if($result)
                {
                    echo ' Thêm thành công click <a href ="index.php"> tại đây</a> để quay về trang chủ ' ;
                }
                else
                {
                    echo "Thêm thấy bại" ;
                }
            }
          
        }

// UPDATE
    public function updateItems($param)
    {
        $id     = mysqli_real_escape_string($this->db->link,$param['id']) ;
        $name   = mysqli_real_escape_string($this->db->link,$param['username']) ;
        $status = mysqli_real_escape_string($this->db->link,$param['status']) ;
        if($name == "" || $status == "" )
        {
            echo "Vui lòng nhập đủ thông tin" ;
        }
        else
        {
            $query  = "UPDATE user SET `username` = '$name' , `status_user` = '$status' WHERE id = '$id'";
            $result = $this->db->update($query);
            if($result)
            {
                echo ' Update thành công click <a href ="index.php"> tại đây</a> để quay về trang chủ ' ;
            }
            else
            {
                echo 'Update thấy bại' ;
            }
        }
    
    }

        public function getItems($params)
        {
            $params = mysqli_real_escape_string($this->db->link,$params) ;
            
            $query  = "SELECT * FROM user WHERE id = '$params' " ;
            $result = $this->db->select($query) ; 
            return $result ;
        }

        
        public function deleteItems($params)
        {
            $params = mysqli_real_escape_string($this->db->link,$params) ;
            
            $query  = "DELETE FROM user WHERE id = '$params' " ;
            $result = $this->db->delete($query) ; 
            return $result ;
        }
        public function mutyDeleteItems($params)
        {
            
            $id = mysqli_real_escape_string($this->db->link,$params) ;
            $query  = "DELETE FROM user WHERE id =  '$id' " ;
            $result = $this->db->delete($query) ; 
            if($result)
            {              
                header('location:index.php') ;
            }

        }

        
        public function pagination($page)
        {
            // $page =  mysqli_real_escape_string($this->db->link,$page) ;
            // $itemsPage = 04 ;
            // $offset    = ($page - 1) * $itemsPage ;
            // $query  = "SELECT * FROM user LIMIT $offset,$itemsPage" ;
            // $result = $this->db->select($query) ;                 
            // return $result ;
          
        }
        public function getPage()
        {
            $queryNum  = "SELECT * FROM user " ;
            $resultNum = $this->db->select($queryNum);       
            $totalNum  = mysqli_num_rows($resultNum) ; 
            $number_pages = ceil($totalNum / 4) ;
            $i = 1 ;
            ?>
                <p style="float: left; margin-left:80%" >Trang</p>
            <?php
            for($i=1 ; $i<=$number_pages ; $i++)
            {   
               
                ?>  
                        <div >       
                                <a style= "float:left ; margin: 0 5px ; text-decoration: none;" href="index.php?page=<?php echo $i ;?>"><?php echo $i ?> </a>
                        </div>
                
                <?php    // echo '<div style = ""><a style = "float:left; margin: 0 2px ;"href="index.php?page='.$i.'"> '.$i.' </a> </div>' ;      
            }    
            if( $i > 4 ) 
            {
                header('location:404.php');
            }            
        }

        public function changeStatus($id,$status)
        {
           $id     = mysqli_real_escape_string($this->db->link,$id) ;
           $status = mysqli_real_escape_string($this->db->link,$status) ;
           if($status == 1)
           {
                $query   = "UPDATE user SET status_user = 0 WHERE id = '$id'  " ;
                $result  = $this->db->update($query) ;
                return $result;  
           }
           else
           {
                $query   = "UPDATE user SET status_user = 1 WHERE id = '$id'  " ;
                $result  = $this->db->update($query) ;
                return $result;  
           }              
        }

        public function countAction($params)
        {
            $params  = mysqli_real_escape_string($this->db->link,$params) ;    
            $query   = "SELECT * FROM user WHERE status_user = '$params' " ;
            $result  = $this->db->select($query) ;        
            return $result ;           
        }
} 
?>
