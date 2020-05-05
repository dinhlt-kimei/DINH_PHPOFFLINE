<?php
    require_once("data.php");
    $xhtmlBreadCrumLevelTwo = '';
    if($menuCurrent == 'index')
    {
        $xhtmlBreadCrumLevelTwo = '<span>Home</span>';
    }
    else
    {
      $xhtmlBreadCrumLevelTwo = ' <a href="index.php">Home</a>
                          <span>></span>
                          <span> '.$currentBreadCrum[0].' </span> 
                          <span>></span>
                          <span> '.$currentBreadCrum[1].' </span> ' ;

    }

?>

<div class="breadcrumb">
         <?php echo $xhtmlBreadCrumLevelTwo?>
</div>