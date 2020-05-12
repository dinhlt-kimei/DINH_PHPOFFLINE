<?php 
        $xml         = simplexml_load_file("./test.xml");
        
        $string_json = json_encode($xml,true);
        $array_json  = json_decode($string_json,true);    
        echo "<pre>" ;
        print_r($array_json) ;
        echo "</pre>" ;
        echo "</hr>" ;     
        foreach($array_json as $key => $value)
        {
            echo  $value['title'] ;
        }