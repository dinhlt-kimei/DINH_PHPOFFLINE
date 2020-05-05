<?php
            require_once("data.php") ;

            // echo "<pre>";
            // echo print_r($arrMenu);
            // echo "</pre>" ;

            $xhtmlMenuTwo = '';
            if(isset($arrMenu))
            {
               foreach($arrMenu as $keyLevelOne => $valueLevelOne)
               {
                  if(isset($valueLevelOne["child"]))
                  {
                     foreach($valueLevelOne["child"] as $keyLevelTwo => $valueLevelTwo)
                     {
                        $classActiveTwo = '';
                        if($keyLevelTwo == $menuCurrent) $classActiveTwo = 'class = "active"';
    
                        $xhtmlMenuTwo .= sprintf('<li %s ><a href="%s">%s </a></li>',$classActiveTwo,$valueLevelTwo["link"],$valueLevelTwo["name"]) ;
                
                     }
                        
                  }
               }
            }
            
      
?>