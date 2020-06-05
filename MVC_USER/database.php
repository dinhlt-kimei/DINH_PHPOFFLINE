<?php
      require_once ('./config/config.php');
?>
<?php
Class Database{
   public  $con ;
   private $host   = DB_HOST;
   private $user   = DB_USER;
   private $pass   = DB_PASS;
   private $dbname = DB_NAME;
 

 public function __construct(){
    $this->con = mysqli_connect($this->host,$this->user,$this->pass);
    mysqli_select_db($this->con,$this->dbname) ;
    mysqli_query($this->con,"SET NAMES 'utf8' " );
 } 
 }
 