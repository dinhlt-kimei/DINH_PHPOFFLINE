<?php
class Index_Model extends Model {
    
        private $db;       
        public function __construct()
        {
            $this->db = new Model()  ;
        }
        public function List()
        {
            $query  = "SELECT * FROM user " ;
            $result = $this->db->select($query) ;
            return $result ;
        }
 
    }
?>
