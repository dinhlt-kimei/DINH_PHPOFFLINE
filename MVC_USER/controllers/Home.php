<?php
   class Home extends Controller{

      function List()
      {
         // Models  
            $list = $this->Models("userModels") ;
         // Views 
            $this->Views("index",[
               "DS" =>$list->List(),  // Show List  
            ]) ;
      }
      function Search()
      {

      }
 
   }
?> 