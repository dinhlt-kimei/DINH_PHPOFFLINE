<?php
    class userModels  extends Database{

        public function List()
        {
            $query  = "SELECT * FROM user " ;
            return  mysqli_query($this->con,$query) ;
        }
        public function Add()
        {
            // $query = "INSERT INTO user(`username`, `status_user`) VALUES ()"
        }
    }
?>