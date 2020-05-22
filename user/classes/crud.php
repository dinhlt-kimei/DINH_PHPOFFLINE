
<?php require_once 'database.php';  ?>
<?php
    
    class CRUD {
        private $db ;
        public function __construct()
        {
            $this->db = new Database();
        }
        //INSERT TO DATABASE  
        public function insert_data($data)
        {
            $username = mysqli_real_escape_string($this->db->link,$data['username']) ;
            $email    = mysqli_real_escape_string($this->db->link,$data['email']) ;
            $password = mysqli_real_escape_string($this->db->link,$data['password']) ;
            $birthday = mysqli_real_escape_string($this->db->link,$data['birthday']) ;
            $group    = mysqli_real_escape_string($this->db->link,$data['group']) ;
            $status   = mysqli_real_escape_string($this->db->link,$data['status']) ;
            $ordering = mysqli_real_escape_string($this->db->link,$data['ordering']) ;

            if($username == "" || $email == "" || $password == "" || $birthday == "" || $group =="" || $status == "" || $ordering == "" )
            {
                $alert = " Information not empty " ;
                return $alert ;
            } 
            else
            {
                $query = " INSERT INTO user( `username`  , `email`  ,    `password_user` , `birthday` ,  `group`  , `status_user`,`ordering`) 
                           VALUES  (       '$username','$email', '$password',   '$birthday','$group' , '$status','$ordering')  ";
                $result = $this->db->insert($query)  ;
                if($result)
                {
                    echo ' Thêm thành công!! Click <a href="index.php">vào đây</a> để quay về trang chủ' ;
                }

            }
        }
        ////////////////////////////////////
        public function select_data()
        {
            $query  = "SELECT * FROM  user "  ;
            $result = $this->db->select($query) ;
            return $result ; 

        }
        ////////////////////////////////////

        public function select_edit($id) 
        {
            $id = mysqli_real_escape_string($this->db->link,$id) ;

            $query  = "SELECT * FROM user WHERE id = '$id' " ;
            $result = $this->db->select($query);
            return $result;
        }
        public function update_data($data,$id)
        {
            $id = mysqli_real_escape_string($this->db->link,$id) ;
            $username = mysqli_real_escape_string($this->db->link,$data['username']) ;
            $email    = mysqli_real_escape_string($this->db->link,$data['email']) ;
            $password = mysqli_real_escape_string($this->db->link,$data['password']) ;
            $birthday = mysqli_real_escape_string($this->db->link,$data['birthday']) ;
            $group    = mysqli_real_escape_string($this->db->link,$data['group']) ;
            $status   = mysqli_real_escape_string($this->db->link,$data['status']) ;
            $ordering = mysqli_real_escape_string($this->db->link,$data['ordering']) ;

            if($username == "" || $email == "" || $password == "" || $birthday == "" || $group =="" || $status == "" || $ordering == "" )
            {
                $alert = " Information not empty " ;
                return $alert ;
            } 
            else
            {
                $query  = "UPDATE user SET `username` = '$username' , `email` = '$email' , `password_user` = '$password', `birthday` = '$birthday' , `group`= '$group' , `status_user` = '$status' , `ordering` = '$ordering' 
                           WHERE  id = '$id'  " ;
                $result = $this->db->update($query);

                if($result)
                {
                    echo ' Cập nhập thành công!! Click <a href="index.php">vào đây</a> để quay về trang chủ ' ;
                }
                else
                {
                    echo "Cập nhập thất bại!! " ;
                }
            }
        }
        // DELETE DATA
        public function delete_data($id)
        {
            $id = mysqli_real_escape_string($this->db->link,$id) ;

            $query  = "DELETE FROM user WHERE id = '$id' ";
            $result = $this->db->delete($query) ;

            if($result)
            {
                echo ' Đã xóa thành công!! Click <a href="index.php">vào đây</a> để quay về trang chủ ' ;
            }
            else
            {
                echo " Xóa thất bại!! " ;
            }
        }

        public function mutyDelete($id)
        {
            $flag = false ;
            $id = mysqli_real_escape_string($this->db->link,$id) ;
            $query  = "DELETE FROM user WHERE id =  '$id' " ;
            $result = $this->db->delete($query) ; 
            if($result)
            {
                $flag = true;
            }
            else
            {
                $flag = false;
            }
			if($flag == true)  echo '<p>Dữ liệu đã được xóa thành công</p>' ;
			if($flag == false) echo '<p>Vui lòng chọn files cần xóa.</p>' ;
	
        }


        public function search_data($search)
        {
            $search = mysqli_real_escape_string($this->db->link,$search);

            $query  = "SELECT * FROM user WHERE `username` LIKE '%$search%' ";
            $result = $this->db->select($query) ;
            if($result)
            {
                return $result ;
            }
            else
            {
                echo '<h2 style = "color:red ; margin-left:40% ;">Không tìm thấy sản phẩm</h2>' ;
            }

           

        }
    }

?>
