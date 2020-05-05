<?php
    $arrMenu = [
        'index' => [
            "name"  => "Home",   "link"  => "index.php"
        ],
        'about' => [
            "name"  => "About",  
            "link"  => "about.php", 
            "child" => [
                'service'   => [ 
                    "name"  => "Service", 
                    "link"  => "service.php",
                    "child" => [
                        'sale'      => ["name" => "Sale", "link" => "sale.php"],
                        'training'  => ["name" => "Training", "link" => "training.php"]
                    ]
                ], 
                'company'   => [
                    "name" => "Company", 
                    "link" => "company.php",
                    "child" => [
                        'toyota' => ["name" => "Toyota","link"   => "toyota.php"]
                    ]]
        ]],
        'contact' => ["name" => "Contact", "link" => "contact.php"]
    ];

    $arrBreadCrumb = [];

    foreach($arrMenu as $keyLevelOne => $valueLevelOne)
    {
        $arrBreadCrumb[$keyLevelOne][] = $valueLevelOne["name"];


        if(isset($valueLevelOne["child"])){

            foreach($valueLevelOne["child"] as $keyLevelTwo => $valueLevelTwo){

                $arrBreadCrumb[$keyLevelTwo][] = $valueLevelOne["name"];
                $arrBreadCrumb[$keyLevelTwo][] = $valueLevelTwo["name"];
                if(isset($valueLevelTwo["child"])){
                    
                    foreach($valueLevelTwo["child"] as $keyLevelThree => $valueLevelThree) {
                        $arrBreadCrumb[$keyLevelThree][] = $valueLevelOne["name"];
                        $arrBreadCrumb[$keyLevelThree][] = $valueLevelTwo["name"];
                        $arrBreadCrumb[$keyLevelThree][] = $valueLevelThree["name"];
                    }
                }
                
            }
        }
        
    }

    $path = "$_SERVER[REQUEST_URI]"; 
    $menuCurrent = basename($path, ".php") ;
    $currentBreadCrum = $arrBreadCrumb[$menuCurrent];   
    // echo "<pre>";
    // echo print_r($currentBreadCrum);
    // echo "</pre>";
?>
 
  