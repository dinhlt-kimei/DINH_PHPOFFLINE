<?php
   
         require_once("data.php");
         // echo "<pre>";
         // echo print_r($arrMenu);
         // echo "</pre>";
         $xhtmlMenuOne = '';
         if(isset($arrMenu))
         {
            foreach($arrMenu as $keyLevelOne => $valueLevelOne)
            {         
                $classActive = '';
                if($keyLevelOne == $menuCurrent) $classActive = 'class = "active"';
    
                $xhtmlMenuOne .= sprintf('<li %s ><a href="%s">%s </a></li>',$classActive,$valueLevelOne["link"],$valueLevelOne["name"]) ;
                
            }
         }
   
   ?>